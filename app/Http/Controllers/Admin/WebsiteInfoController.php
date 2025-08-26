<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class WebsiteInfoController extends Controller
{
    public function index()
    {
        $data['title'] = 'Website Info | Balemora Resorts';
        $data['info'] = WebsiteInfo::query()->first();
        $user = Auth::user();
        if (!$data['info']) {
            $data['info'] = WebsiteInfo::create([
                'website_name' => 'Balemora',
                'website_logo' => '',
                'website_white_logo' => '',
                'website_favicon' => '',
                'apple_touch_icon' => '',
            ]);
        }
        return view('backend.website-info', $data, compact('user'));
    }

    public function update(Request $request)
    {
        $info = WebsiteInfo::query()->firstOrFail();

        $request->validate([
            'website_name' => 'nullable|string|max:255',
            'website_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            'website_white_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            // allow .ico without the image rule so .ico passes
            'website_favicon' => 'nullable|mimes:png,ico|max:1024',
            'apple_touch_icon' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $payload = [];

        if ($request->filled('website_name')) {
            $payload['website_name'] = (string) $request->string('website_name');
        }

        // Ensure public/uploads/website-images exists
        $uploadDir = public_path('uploads/website-images');
        if (!File::exists($uploadDir)) {
            File::makeDirectory($uploadDir, 0755, true);
        }

        // Helper to delete existing file from a stored public URL
        $deleteExistingByUrl = function (?string $url): void {
            if (!$url) { return; }
            $pathFromUrl = parse_url($url, PHP_URL_PATH);
            if (!$pathFromUrl) { return; }
            $fullPath = public_path(ltrim($pathFromUrl, '/'));
            if (File::exists($fullPath)) {
@File::delete($fullPath);
            }
        };

        if ($request->hasFile('website_logo')) {
            // delete old logo if exists
            $deleteExistingByUrl($info->website_logo ?? null);

            $file = $request->file('website_logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $payload['website_logo'] = asset('uploads/website-images/' . $filename);
        }

        if($request->hasFile('website_white_logo')){
             // delete old logo if exists
             $deleteExistingByUrl($info->website_white_logo ?? null);

             $file = $request->file('website_white_logo');
             $filename = 'white_logo_' . time() . '.' . $file->getClientOriginalExtension();
             $file->move($uploadDir, $filename);
             $payload['website_white_logo'] = asset('uploads/website-images/' . $filename);
        }

        if ($request->hasFile('website_favicon')) {
            // delete old favicon if exists
            $deleteExistingByUrl($info->website_favicon ?? null);

            $file = $request->file('website_favicon');
            $filename = 'favicon_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $payload['website_favicon'] = asset('uploads/website-images/' . $filename);
        }

        if ($request->hasFile('apple_touch_icon')) {
            // delete old apple touch icon if exists
            $deleteExistingByUrl($info->apple_touch_icon ?? null);

            $file = $request->file('apple_touch_icon');
            $filename = 'apple_touch_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $payload['apple_touch_icon'] = asset('uploads/website-images/' . $filename);
        }

        if (!empty($payload)) {
            $info->update($payload);
        }

        return redirect()->back()->with('success', 'Website info updated successfully.');
    }
}
