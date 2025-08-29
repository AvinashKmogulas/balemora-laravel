<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactDetailsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $contactDetails = ContactDetails::orderBy('created_at', 'desc')->get();
        return view('backend.contact-details', compact('contactDetails', 'user'));
    }

    public function store(Request $request)
    {
        // Check if it's a single contact or multiple contacts
        if ($request->has('contacts')) {
            // Multiple contacts
            $validator = Validator::make($request->all(), [
                'contacts' => 'required|array|min:1',
                'contacts.*.type' => 'required|in:phone,email',
                'contacts.*.detail' => 'required|string|max:255'
            ]);

            // Add conditional validation for each contact
            foreach ($request->contacts as $index => $contact) {
                if ($contact['type'] === 'email') {
                    $validator->addRules(["contacts.{$index}.detail" => 'email']);
                } elseif ($contact['type'] === 'phone') {
                    $validator->addRules(["contacts.{$index}.detail" => 'regex:/^[\+]?[1-9][\d]{0,15}$/']);
                }
            }

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            try {
                $createdCount = 0;
                foreach ($request->contacts as $contact) {
                    ContactDetails::create([
                        'contact_type' => $contact['type'],
                        'contact' => $contact['detail'],
                        'status' => true
                    ]);
                    $createdCount++;
                }

                $message = $createdCount === 1 ? 'Contact detail created successfully!' : "{$createdCount} contact details created successfully!";
                
                return response()->json([
                    'success' => true,
                    'message' => $message
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to create contact details'
                ], 500);
            }
        } else {
            // Single contact (for backward compatibility)
            $validator = Validator::make($request->all(), [
                'contact_type' => 'required|in:phone,email',
                'contact' => 'required|string|max:255'
            ]);

            // Add conditional validation based on contact type
            if ($request->contact_type === 'email') {
                $validator->addRules(['contact' => 'email']);
            } elseif ($request->contact_type === 'phone') {
                $validator->addRules(['contact' => 'regex:/^[\+]?[1-9][\d]{0,15}$/']);
            }

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            try {
                ContactDetails::create([
                    'contact_type' => $request->contact_type,
                    'contact' => $request->contact,
                    'status' => true
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Contact detail created successfully!'
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to create contact detail'
                ], 500);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'contact_type' => 'required|in:phone,email',
            'contact' => 'required|string|max:255'
        ]);

        // Add conditional validation based on contact type
        if ($request->contact_type === 'email') {
            $validator->addRules(['contact' => 'email']);
        } elseif ($request->contact_type === 'phone') {
            $validator->addRules(['contact' => 'regex:/^[\+]?[1-9][\d]{0,15}$/']);
        }

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contactDetail = ContactDetails::findOrFail($id);
            $contactDetail->update([
                'contact_type' => $request->contact_type,
                'contact' => $request->contact
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Contact detail updated successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update contact detail'
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $contactDetail = ContactDetails::findOrFail($id);
            $contactDetail->delete();

            return response()->json([
                'success' => true,
                'message' => 'Contact detail deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete contact detail'
            ], 500);
        }
    }

    public function toggleStatus($id)
    {
        try {
            $contactDetail = ContactDetails::findOrFail($id);
            $contactDetail->update([
                'status' => !$contactDetail->status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully!',
                'status' => $contactDetail->status
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update status'
            ], 500);
        }
    }
}
