<?php

namespace App\Http\Controllers\Frontpage;

use App\Models\Tour;
use App\Models\Billing;
use App\Models\Booking;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function __invoke()
    {
        $tours = Tour::where('book_package', true)->orderBy('order', 'asc')->get();
        $countries = Country::all();

        return view('frontpage.booking.index', compact('tours', 'countries'));
    }

    public function book(Request $request)
    {
        $tour = Tour::find($request->tour_id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
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

    public function billing(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        $booking->update([
            'payment_status' => $request->payment_status,
        ]);

        $data = [
            'billing_name' => $request->billing_name,
            'billing_email' => $request->billing_email,
            'billing_phone' => $request->billing_phone,
            'billing_address' => $request->billing_address,
            'billing_country' => $request->billing_country,
            'billing_city' => $request->billing_city,
            'billing_poscode' => $request->billing_poscode,
            'billing_state' => $request->billing_state,
            'snap_token' => $request->snap_token,
            'booking_id' => $request->booking_id,
            'order_id' => $booking->order_id,
        ];

        Billing::updateOrCreate($data);

        return redirect()->back();
    }

    public function validation_billing(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'billing_name' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
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
