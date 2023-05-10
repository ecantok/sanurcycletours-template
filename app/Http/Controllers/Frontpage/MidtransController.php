<?php

namespace App\Http\Controllers\Frontpage;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Billing;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransController extends Controller
{
    public function generate_snap_token(Request $request)
    {
        $booking = Booking::find($request->booking_id);

        $booking->order_id = 'SCT-' . $booking->id . '-' . time();
        $booking->save();

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

    public function handle_notification(Request $request)
    {
        $server_key = config('midtrans.server_key');

        $transaction = $request->transaction_status;
        $type = $request->payment_type;
        $order_id = $request->order_id;
        $fraud = $request->fraud_status;

        $billing  = Billing::where('order_id', $order_id)->first();
        $booking = Booking::where('order_id', $order_id)->first();

        $hashed = hash('sha512', $order_id . $request->status_code . $request->gross_amount . $server_key);

        if ($hashed == $request->signature_key) {
            if ($transaction == 'capture') {
                if ($type == 'credit_card') {
                    if ($fraud == 'challenge') {
                        $this->notification_update($booking, $billing, $request);
                    } else {
                        $this->notification_update($booking, $billing, $request);
                    }
                }
            } else if ($transaction == 'settlement') {
                $this->notification_update($booking, $billing, $request);
            } else if ($transaction == 'pending') {
                $this->notification_update($booking, $billing, $request);
            } else if ($transaction == 'deny') {
                $this->notification_update($booking, $billing, $request);
            } else if ($transaction == 'expire') {
                $this->notification_update($booking, $billing, $request);
            } else if ($transaction == 'cancel') {
                $this->notification_update($booking, $billing, $request);
            }

            return response()->json([
                'response' => $request->all(),
                'booking' => $booking,
                'billing' => $billing,
            ]);
        } else {
            return response()->json([
                'status' => 'failed signature key!',
            ]);
        }
    }

    protected function notification_update($booking, $billing, $response)
    {
        $booking->payment_status = $response->transaction_status;
        $booking->save();

        $billing->transaction_status = $response->transaction_status;
        $billing->currency = $response->currency;
        $billing->payment_type = $response->payment_type;
        $billing->amount = $response->gross_amount;
        $billing->transaction_time = $response->transaction_time;
        $billing->fraud_status = $response->fraud_status;
        $billing->save();
    }
}