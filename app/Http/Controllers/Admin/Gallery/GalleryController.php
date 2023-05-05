<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('adminpage.gallery.index', compact('galleries'));
    }

    public function add()
    {
        return view('adminpage.gallery.add');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'category' => 'required',
            'link' => 'nullable',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $images = $request->file('image');
        $imagePath = 'assets/images/gallery';
        foreach ($images as $image) {
            $imageName = $image->getClientOriginalName();
            $imageSaveName = 'gallery' . '-' . time() . '-' . $imageName;
            $image->move($imagePath, $imageSaveName);
            $path = $imagePath . '/' . $imageSaveName;
            Gallery::create([
                'category' => $validData['category'],
                'link' => $validData['link'],
                'image' => $path,
            ]);
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery berhasil ditambahkan');
    }

    public function delete(Gallery $gallery)
    {
        unlink(public_path($gallery->image));

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery berhasil dihapus');
    }
}
