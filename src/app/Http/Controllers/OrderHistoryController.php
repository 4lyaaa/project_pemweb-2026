<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('riwayat-pesanan', compact('orders'));
    }
}