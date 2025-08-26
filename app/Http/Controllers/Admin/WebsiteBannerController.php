<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebsiteBannerController extends Controller
{
    public function index(){
        $data['title'] = "Website Banners | Balemora Admin";
        $data['banners'] = WebsiteBanner::all();
        $user = Auth::user();

        return view('backend.website-banner', $data, compact('user'));
    }

    // save banner
    public function save(Request $request){
        $validate = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'banner' => 'required|file|mimetypes:image/jpeg,image/png,image/gif,image/webp,video/mp4,video/quicktime,video/webm|max:102400',
            'page' => 'required|string|max:255',
        ]);

        if($validate->fails()){
            return back()->with('error', $validate->errors()->first());
        }

        $mediaUrl = null;
        $mediaType = null; // image|video
        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $isVideo = str_starts_with($file->getMimeType(), 'video/');
            $prefix = $isVideo ? 'banner_video_' : 'banner_image_';
            $filename = $prefix . time() . '.' . $file->getClientOriginalExtension();

            $uploadDir = public_path('uploads/website-banners');
            if(!is_dir($uploadDir)){
@mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $mediaUrl = asset('uploads/website-banners/' . $filename);
            $mediaType = $isVideo ? 'video' : 'image';
        }

        WebsiteBanner::create([
            'title' => $request->string('title'),
            'subtitle' => $request->string('sub_title'),
            'image' => $mediaUrl,
            'mediaType' => $mediaType,
            'page' => $request->string('page'),
            'status' => true,
        ]);

        return redirect()->route('websiteBanner')->with('success', 'Banner saved successfully.');
    }

    // update banner (AJAX status or full form)
    public function update(Request $request){
        // If it's JSON, treat as status toggle
        if ($request->wantsJson()) {
            $request->validate([
                'id' => 'required|integer|exists:website_banners,id',
                'status' => 'required|boolean',
            ]);
            $banner = WebsiteBanner::findOrFail((int) $request->input('id'));
            $banner->status = (bool) $request->boolean('status');
            $banner->save();
            return response()->json(['success' => true]);
        }

        // Otherwise handle full edit form submit
        $request->validate([
            'id' => 'required|integer|exists:website_banners,id',
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'banner' => 'nullable|file|mimetypes:image/jpeg,image/png,image/gif,image/webp,video/mp4,video/quicktime,video/webm|max:102400',
            'page' => 'required|string|max:255',
        ]);

        $banner = WebsiteBanner::findOrFail((int) $request->input('id'));

        $payload = [
            'title' => (string) $request->string('title'),
            'subtitle' => (string) $request->string('sub_title'),
            'page' => (string) $request->string('page'),
        ];

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $isVideo = str_starts_with($file->getMimeType(), 'video/');
            $prefix = $isVideo ? 'banner_video_' : 'banner_image_';
            $filename = $prefix . time() . '.' . $file->getClientOriginalExtension();
            $uploadDir = public_path('uploads/website-banners');
            if(!is_dir($uploadDir)){
                @mkdir($uploadDir, 0755, true);
            }
            $file->move($uploadDir, $filename);
            $payload['image'] = asset('uploads/website-banners/' . $filename);
            $payload['mediaType'] = $isVideo ? 'video' : 'image';
        }

        $banner->update($payload);
        return redirect()->route('websiteBanner')->with('success', 'Banner updated successfully.');
    }
}
