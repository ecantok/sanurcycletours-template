<?php

namespace App\Http\Controllers\Admin\Testimonial;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('adminpage.testimonial.index', compact('testimonials'));
    }

    public function add()
    {
        return view('adminpage.testimonial.add');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'nullable',
            'content' => 'required',
            'stars' => 'nullable',
            'author' => 'nullable',
            'date' => 'nullable',
        ]);

        $validData['slug'] = Str::slug($validData['title']);

        Testimonial::create($validData);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial added successfully');
    }
}
