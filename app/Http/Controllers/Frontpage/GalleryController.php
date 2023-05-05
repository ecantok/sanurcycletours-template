<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $images = Gallery::where('category', 'image')->get();
        $videos = Gallery::where('category', 'video')->get();

        return view('frontpage.gallery.index', compact('images', 'videos'));
    }
}
