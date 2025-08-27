<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class OffersController extends Controller
{
    public function offers()
    {
        $data['title'] = 'Offer | Balemora Admin';
        $data['offers'] = Offer::all();
        // dd($data['offers']);
        $user = Auth::user();
        return view('backend.offer', $data, compact('user'));
    }

    public function addOffers(){
        $data['title'] = 'Offer | Balemora Admin';
        $data['offers'] = Offer::all();
        $user = Auth::user();
        return view('backend.add-offer', $data, compact('user'));
    }

    public function editOffers($id){
        $data['title'] = 'Edit Offer | Balemora Admin';
        $data['offer'] = Offer::findOrFail($id);
        $user = Auth::user();
        return view('backend.edit-offer', $data, compact('user'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'offer_name' => 'required|string|max:255',
                'offer_description' => 'nullable|string',
                'offer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'terms' => 'nullable|string',
                'properties' => 'required|array|min:1',
                'properties.*' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
                'start_date' => 'required|date|after_or_equal:today',
                'end_date' => 'required|date|after:start_date',
                'discount_percentage' => 'nullable|numeric|min:0|max:100',
            ], [
                'offer_name.required' => 'Offer title is required.',
                'properties.required' => 'Please select at least one property.',
                'properties.array' => 'Properties must be selected from the list.',
                'properties.min' => 'Please select at least one property.',
                'properties.*.required' => 'Each property selection is required.',
                'start_date.required' => 'Start date is required.',
                'start_date.after_or_equal' => 'Start date must be today or a future date.',
                'end_date.required' => 'End date is required.',
                'end_date.after' => 'End date must be after start date.',
                'discount_percentage.min' => 'Discount percentage must be at least 0%.',
                'discount_percentage.max' => 'Discount percentage cannot exceed 100%.',
                'offer_image.image' => 'The file must be an image.',
                'offer_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, webp.',
                'offer_image.max' => 'The image may not be greater than 2MB.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Handle image upload
            $imageUrl = null;
            if ($request->hasFile('offer_image')) {
                $uploadDir = public_path('uploads/offers');
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                
                $file = $request->file('offer_image');
                $filename = 'offer_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadDir, $filename);
                $imageUrl = asset('uploads/offers/' . $filename);
            }

            // Create the offer
            $offer = Offer::create([
                'offer_name' => $request->offer_name,
                'offer_description' => $request->offer_description ?? '',
                'offer_image' => $imageUrl,
                'terms' => $request->terms ?? '',
                'properties' => is_array($request->properties) ? implode(',', $request->properties) : $request->properties,
                'status' => $request->status,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'discount_percentage' => $request->discount_percentage,
            ]);

            if (!$offer) {
                // If offer creation fails and image was uploaded, delete the image
                if ($imageUrl) {
                    $imagePath = public_path('uploads/offers/' . basename($imageUrl));
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
                
                return redirect()->back()->with('error', 'Failed to create offer. Please try again.');
            }

            return redirect()->route('offers')->with('success', 'Offer created successfully');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Offer creation error: ' . $e->getMessage());
            
            // If image was uploaded and error occurred, delete the image
            if (isset($imageUrl) && $imageUrl) {
                $imagePath = public_path('uploads/offers/' . basename($imageUrl));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Find the offer
            $offer = Offer::findOrFail($id);

            // Validate the request
            $validator = Validator::make($request->all(), [
                'offer_name' => 'required|string|max:255',
                'offer_description' => 'nullable|string',
                'offer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'terms' => 'nullable|string',
                'properties' => 'required|array|min:1',
                'properties.*' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
                'discount_percentage' => 'nullable|numeric|min:0|max:100',
            ], [
                'offer_name.required' => 'Offer title is required.',
                'properties.required' => 'Please select at least one property.',
                'properties.array' => 'Properties must be selected from the list.',
                'properties.min' => 'Please select at least one property.',
                'properties.*.required' => 'Each property selection is required.',
                'start_date.required' => 'Start date is required.',
                'end_date.required' => 'End date is required.',
                'end_date.after' => 'End date must be after start date.',
                'discount_percentage.min' => 'Discount percentage must be at least 0%.',
                'discount_percentage.max' => 'Discount percentage cannot exceed 100%.',
                'offer_image.image' => 'The file must be an image.',
                'offer_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, webp.',
                'offer_image.max' => 'The image may not be greater than 2MB.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Handle image upload
            $imageUrl = $offer->offer_image; // Keep existing image by default
            if ($request->hasFile('offer_image')) {
                $uploadDir = public_path('uploads/offers');
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                
                $file = $request->file('offer_image');
                $filename = 'offer_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadDir, $filename);
                $imageUrl = asset('uploads/offers/' . $filename);

                // Delete old image if it exists
                if ($offer->offer_image) {
                    $oldImagePath = public_path('uploads/offers/' . basename($offer->offer_image));
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }

            // Update the offer
            $updated = $offer->update([
                'offer_name' => $request->offer_name,
                'offer_description' => $request->offer_description ?? '',
                'offer_image' => $imageUrl,
                'terms' => $request->terms ?? '',
                'properties' => is_array($request->properties) ? implode(',', $request->properties) : $request->properties,
                'status' => $request->status,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'discount_percentage' => $request->discount_percentage,
            ]);

            if (!$updated) {
                return redirect()->back()->with('error', 'Failed to update offer. Please try again.');
            }

            return redirect()->route('offers')->with('success', 'Offer updated successfully!');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Offer update error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    public function destroy($id)
    {
        try {
            $offer = Offer::findOrFail($id);
            
            // Delete the image if it exists
            if ($offer->offer_image) {
                $imagePath = public_path('uploads/offers/' . basename($offer->offer_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            
            $offer->delete();
            
            return redirect()->back()->with('success', 'Offer deleted successfully!');
            
        } catch (\Exception $e) {
            Log::error('Offer deletion error: ' . $e->getMessage());
            
            return redirect()->back()->with('error', 'Failed to delete offer. Please try again.');
        }
    }

    public function toggleStatus($id)
    {
        try {
            $offer = Offer::findOrFail($id);
            $newStatus = ($offer->status === 'active' || $offer->status === 1) ? 'inactive' : 'active';
            $offer->update(['status' => $newStatus]);

            return response()->json([
                'success' => true,
                'status' => $newStatus,
                'id' => $offer->id,
            ]);
        } catch (\Exception $e) {
            Log::error('Offer toggle status error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to toggle status.'
            ], 500);
        }
    }
}
