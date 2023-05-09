<?php

namespace App\Http\Controllers\Frontpage;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransController extends Controller
{
    public function generate_snap_token(Request $request)
    {
        $booking = Booking::find($request->booking_id);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => 'SCT-' . $booking->id . '-' . time(),
                'gross_amount' => $booking->total_dp,
            ],
            'credit_card' => [
                "secure" => true
            ],
            'item_details' => [
                [
                    'id' => $booking->id,
                    'price' => $booking->total_dp,
                    'quantity' => 1,
                    'name' => str_limit(title_filter($booking->tour->name), 50),
                ],
            ],
            'customer_details' => [
                'first_name' => $booking->name,
                'email' => $booking->email,
                'phone' => $booking->phone,
                'billing_address' => [
                    'first_name' => $request->billing_name,
                    'email' => $request->billing_email,
                    'phone' => $request->billing_phone,
                    'address' => $request->billing_address,
                    'city' => $request->billing_city,
                    'postal_code' => $request->billing_poscode,
                ],
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
