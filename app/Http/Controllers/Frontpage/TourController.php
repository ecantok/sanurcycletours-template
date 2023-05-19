<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Tour;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Category $category)
    {
        $tours = Tour::where('show', true)->where('category_id', $category->id)->orderBy('order', 'asc')->get();

        return view('frontpage.tour.index', compact('tours', 'category'));
    }

    public function detail(Category $category, Tour $tour)
    {
        return view('frontpage.tour.detail', compact('tour'));
    }
}
