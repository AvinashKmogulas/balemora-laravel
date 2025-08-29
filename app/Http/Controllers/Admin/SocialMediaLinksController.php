<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SocialMediaLinksController extends Controller
{
    public function socialMediaLinks(){
        $user = Auth::user();
        $socialDetails = SocialMediaLink::orderBy('created_at', 'desc')->get();
        return view('backend.social-media-links', compact('socialDetails', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'platform_name' => 'required|string|max:255',
            'platform_url' => 'required|url|max:500',
            'platform_icon' => 'required|string|max:100',
            'status' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            SocialMediaLink::create([
                'platform_name' => $request->platform_name,
                'platform_url' => $request->platform_url,
                'platform_icon' => $request->platform_icon,
                'status' => $request->has('status') ? 1 : 0
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Social media link created successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create social media link!'
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'platform_name' => 'required|string|max:255',
            'platform_url' => 'required|url|max:500',
            'platform_icon' => 'required|string|max:100',
            'status' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $link = SocialMediaLink::findOrFail($id);
            $link->update([
                'platform_name' => $request->platform_name,
                'platform_url' => $request->platform_url,
                'platform_icon' => $request->platform_icon,
                'status' => $request->has('status') ? 1 : 0
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Social media link updated successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update social media link!'
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $link = SocialMediaLink::findOrFail($id);
            $link->delete();

            return response()->json([
                'success' => true,
                'message' => 'Social media link deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete social media link!'
            ], 500);
        }
    }

    public function toggleStatus(Request $request, $id)
    {
        try {
            $link = SocialMediaLink::findOrFail($id);
            $link->update(['status' => $request->status]);

            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update status!'
            ], 500);
        }
    }
}
