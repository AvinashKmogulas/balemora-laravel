<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class WebsiteGalleryController extends Controller
{
    public function gallery(){
        $data['title'] = 'Gallery | Balemora Admin';
        $user = Auth::user();
        $data['lucknow_gallery'] = Gallery::where('property', 'Lucknow')
            ->latest()->paginate(9, ['*'], 'lucknow_page');
        $data['almora_gallery'] = Gallery::where('property', 'Almora')
            ->latest()->paginate(9, ['*'], 'almora_page');

        return view('backend.gallery', $data, compact('user'));
    }   

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property' => 'required|in:Lucknow,Almora',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'image' => 'required|file|mimes:jpeg,jpg,png,webp,gif|max:5120',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first())->withInput();
        }

        $uploadDir = public_path('uploads/gallery');
        if (!File::exists($uploadDir)) {
            File::makeDirectory($uploadDir, 0755, true);
        }

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = strtolower($request->string('property')) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $filename);
            $imageUrl = asset('uploads/gallery/' . $filename);
        }

        Gallery::create([
            'property' => (string) $request->string('property'),
            'title' => (string) $request->string('title'),
            'description' => (string) $request->string('description'),
            'image' => $imageUrl,
        ]);

        $tab = strtolower((string) $request->string('property'));
        return redirect()->route('gallery', ['tab' => $tab])->with('success', 'Gallery item added successfully.');
    }

    public function destroy(int $id)
    {
        $item = Gallery::findOrFail($id);

        // Try deleting the physical file if it is a local public URL
        if (!empty($item->image)) {
            $pathFromUrl = parse_url($item->image, PHP_URL_PATH);
            if ($pathFromUrl) {
                $fullPath = public_path(ltrim($pathFromUrl, '/'));
                if (File::exists($fullPath)) {
@File::delete($fullPath);
                }
            }
        }

        $activeTab = strtolower($item->property ?? 'lucknow');
        $item->delete();
        return redirect()->route('gallery', ['tab' => $activeTab])->with('success', 'Gallery item deleted.');
    }
}
