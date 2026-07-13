<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;

class MidtransCallbackController extends Controller
{
    public function handle(Request $request)
    {
        Log::info('=== MIDTRANS CALLBACK ===');
        Log::info($request->all());

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $notification = new Notification();

        $transaction = $notification->transaction_status;
        $paymentType = $notification->payment_type;
        $fraudStatus = $notification->fraud_status;
        $orderId = $notification->order_id;

        $order = Order::where('midtrans_order_id', $orderId)->first();

        if (!$order) {
            return response()->json([
                'message' => 'Order tidak ditemukan'
            ], 404);
        }

        if ($transaction == 'capture') {

            if ($paymentType == 'credit_card') {

                if ($fraudStatus == 'challenge') {
                    $order->status = 'challenge';
                } else {
                    $order->status = 'paid';
                }

            }

        } elseif ($transaction == 'settlement') {

            $order->status = 'paid';

        } elseif ($transaction == 'pending') {

            $order->status = 'pending';

        } elseif ($transaction == 'deny') {

            $order->status = 'failed';

        } elseif ($transaction == 'expire') {

            $order->status = 'expired';

        } elseif ($transaction == 'cancel') {

            $order->status = 'cancelled';
        }

        $order->save();

        return response()->json([
            'message' => 'OK'
        ]);
    }
}