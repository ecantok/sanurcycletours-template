<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class TestimonialController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $testimonials = Testimonial::all();

        return view('frontpage.testimonial.index', compact('testimonials'));
    }
}
