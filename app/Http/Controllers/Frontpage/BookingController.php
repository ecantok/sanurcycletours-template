<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Tour;
use App\Models\Booking;
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

    public function book(Request $request)
    {
        $tour = Tour::find($request->tour_id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'staying_sanur' => 'required',
            'tour_id' => 'required',
            'adult' => 'required|numeric',
            'child' => 'required|numeric',
        ]);

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

        $validData = $request->all();

        $validData['total_price'] = $adult_price + $child_price;
        $validData['total_dp'] = $validData['total_price'] * 0.25;

        $booking = Booking::create($validData);

        return redirect()->back()->with('show', 'true')->with('booking', $booking)->withInput();
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

    public function validation_billing(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'billing_name' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required|numeric',
            'billing_address' => 'required',
            'billing_country' => 'required',
            'billing_city' => 'required',
            'billing_poscode' => 'required|numeric',
            'billing_state' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ]);
        }
    }
}
