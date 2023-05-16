<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Models\Tour;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::latest()->get();

        return view('adminpage.tour.index', compact('tours'));
    }

    public function add()
    {
        $tours = Tour::where('show', true)->orderBy('order', 'asc')->get();

        return view('adminpage.tour.add', compact('tours'));
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
            'image.*' => 'nullable|file|image|mimes:jpeg,png,jpg,webp|max:5120',
            'show' => 'required|boolean',
            'book_package' => 'required|boolean',
            'order' => 'required|integer',
            'overview' => 'nullable|string',
        ]);

        $validData['slug'] = Str::slug($validData['name']);
        $validData['status'] = 1;

        $tour = Tour::create($validData);

        $images = $request->file('image');
        if ($images) {
            $imagePath = 'assets/images/tour';
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $imageSaveName = $validData['slug'] . '-' . time() . '-' . $imageName;
                $image->move($imagePath, $imageSaveName);
                $path = $imagePath . '/' . $imageSaveName;
                Image::create([
                    'tour_id' => $tour->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.tour.index')->with('success', 'Tour berhasil ditambahkan');
    }

    public function show(Tour $tour)
    {
        return view('adminpage.tour.show', compact('tour'));
    }

    public function edit(Tour $tour)
    {
        $tours = Tour::where('show', true)->orderBy('order', 'asc')->get();

        return view('adminpage.tour.edit', compact('tour', 'tours'));
    }

    public function update(Tour $tour, Request $request)
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
            'image.*' => 'nullable|file|image|mimes:jpeg,png,jpg,webp|max:5120',
            'show' => 'required|boolean',
            'book_package' => 'required|boolean',
            'order' => 'required|integer',
            'overview' => 'nullable|string',
        ]);

        $validData['slug'] = Str::slug($validData['name']);
        $validData['status'] = 1;

        $tour->update($validData);

        $images = $request->file('image');
        if ($images) {
            $imagePath = 'assets/images/tour';
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $imageSaveName = $validData['slug'] . '-' . time() . '-' . $imageName;
                $image->move($imagePath, $imageSaveName);
                $path = $imagePath . '/' . $imageSaveName;
                Image::create([
                    'tour_id' => $tour->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.tour.index')->with('success', 'Tour berhasil diperbarui');
    }

    public function delete(Tour $tour)
    {
        if (!blank($tour->images)) {
            foreach ($tour->images as $image) {
                unlink(public_path($image->path));
                $image->delete();
            }
        }

        $tour->delete();

        return redirect()->route('admin.tour.index')->with('success', 'Tour berhasil dihapus');
    }
}
