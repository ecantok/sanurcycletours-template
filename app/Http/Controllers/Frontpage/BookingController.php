<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Tour;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function __invoke()
    {
        $tours = Tour::all();
        $countries = Country::all();

        return view('frontpage.booking.index', compact('tours', 'countries'));
    }

    public function validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'staying_sanur' => 'required',
            'tour_id' => 'required',
            'adult' => 'required|numeric',
            'child' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ]);
        }
    }

    public function detail_billing(Request $request)
    {
        $tour = Tour::find($request->tour_id);

        if ($request->adult > 0) {
            $adult_price = $tour->adult_price * $request->adult;
        } else {
            $adult_price = 0;
        }

        if ($request->child > 0) {
            $child_price = !blank($tour->child_price) && $tour->child_price != 0 ? $tour->child_price * $request->child : $tour->adult_price * $request->child;
        } else {
            $child_price = 0;
        }

        $total_price = $adult_price + $child_price;
        $deposit = $total_price * 0.25;

        $tour->total_price = number_format($total_price, 2, ',', '.');
        $tour->deposit = number_format($deposit, 2, ',', '.');
        $tour->fixed_tour_name = title_filter($tour->name) . "<b> Rp . " . number_format($tour->adult_price) . "</b>";

        return $tour;
    }
}
