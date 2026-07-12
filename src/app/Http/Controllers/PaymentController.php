<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function pay(Order $order)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        if (!$order->snap_token) {

            $params = [

                'transaction_details' => [
                    'order_id' => 'ORDER-' . $order->id,
                    'gross_amount' => $order->total,
                ],

                'customer_details' => [
                    'first_name' => $order->nama_penerima,
                    'email' => $order->user->email,
                    'phone' => $order->nomor_whatsapp,
                ],

                'transaction_details' => [
                    'order_id' => 'ORDER-' . $order->id,
                    'gross_amount' => $order->total,
                ],

                'item_details' => [[
                    'id' => $order->produk_slug,
                    'price' => $order->harga,
                    'quantity' => $order->jumlah,
                    'name' => $order->nama_produk,
                ]],

            ];

            $snapToken = Snap::getSnapToken($params);

            $order->update([
                'snap_token' => $snapToken,
                'midtrans_order_id' => 'ORDER-' . $order->id,
            ]);
        }

        return view('payment', compact('order'));
    }
}