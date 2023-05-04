<?php

namespace App\Http\Controllers\Admin\Bicycle;

use App\Models\Bicycle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BicycleController extends Controller
{
    public function index()
    {
        $bicycles = Bicycle::all();

        return view('adminpage.bicycle.index', compact('bicycles'));
    }

    public function add()
    {
        return view('adminpage.bicycle.add');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $validData['slug'] = Str::slug($validData['name']);

        $image = $request->file('image');
        if ($image) {
            $imagePath = 'assets/images/bicycle';
            $imageName = $image->getClientOriginalName();
            $imageSaveName = $validData['slug'] . '-' . time() . '-' . $imageName;
            $image->move($imagePath, $imageSaveName);
            $path = $imagePath . '/' . $imageSaveName;
            $validData['path'] = $path;
        }

        Bicycle::create($validData);

        return redirect()->route('admin.bicycle.index')->with('success', 'Bicycle berhasil ditambahkan');
    }

    public function edit(Bicycle $bicycle)
    {
        return view('adminpage.bicycle.edit', compact('bicycle'));
    }

    public function update(Bicycle $bicycle, Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $validData['slug'] = Str::slug($validData['name']);

        $image = $request->file('image');
        if ($image) {
            if (!blank($bicycle->path)) {
                unlink(public_path($bicycle->path));
            }

            $imagePath = 'assets/images/bicycle';
            $imageName = $image->getClientOriginalName();
            $imageSaveName = $validData['slug'] . '-' . time() . '-' . $imageName;
            $image->move($imagePath, $imageSaveName);
            $path = $imagePath . '/' . $imageSaveName;
            $validData['path'] = $path;
        }

        $bicycle->update($validData);

        return redirect()->route('admin.bicycle.index')->with('success', 'Bicycle berhasil diupdate');
    }

    public function delete(Bicycle $bicycle)
    {
        if (!blank($bicycle->path)) {
            unlink(public_path($bicycle->path));
        }

        $bicycle->delete();

        return redirect()->route('admin.bicycle.index')->with('success', 'Bicycle berhasil dihapus');
    }
}
