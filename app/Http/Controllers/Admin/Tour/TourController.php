<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Models\Tour;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index()
    {
        return view('adminpage.tour.index');
    }

    public function add()
    {
        return view('adminpage.tour.add');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|string',
            'content' => 'required|string',
            'start' => 'nullable',
            'pickup_time' => 'nullable',
            'pickup_localtion' => 'nullable|string',
            'adult_price' => 'nullable|integer',
            'child_price' => 'nullable|integer',
            'infant_price' => 'nullable|integer',
            'image.*' => 'nullable',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $tour = Tour::create($validData);

        $images = $request->file('image');
        if ($images) {
            $imagePath = 'assets/images/tour';
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move($imagePath, $imageName);
                $path = $imagePath . '/' . $imageName;
                Image::create([
                    'tour_id' => $tour->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.tour.index')->with('success', 'Tour berhasil ditambahkan');
    }
}
