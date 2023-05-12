<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tours = Tour::where('show', true)->latest()->get();
        return view('frontpage.tour.index', compact('tours'));
    }

    public function detail(Tour $tour)
    {
        return view('frontpage.tour.detail', compact('tour'));
    }
}
