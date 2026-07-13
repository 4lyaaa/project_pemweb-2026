<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function show($slug)
    {
        // Ambil produk berdasarkan slug dari database
        $produk = Product::where('slug', $slug)->firstOrFail();

        // Ambil user yang sedang login
        $user = Auth::user();

        return view('checkout', compact('produk', 'user', 'slug'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_slug' => 'required|string',
            'nama_produk' => 'required|string',
            'harga' => 'required|integer',
            'jumlah' => 'required|integer|min:1',
            'total' => 'required|integer',
            'nama_penerima' => 'required|string',
            'nomor_whatsapp' => 'required|string',
            'alamat' => 'required|string',
            'metode_pembayaran' => 'required|string',
        ]);

        $user = Auth::user();

        $order = Order::create([
            'user_id' => $user->id,
            'produk_slug' => $request->produk_slug,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'nama_penerima' => $request->nama_penerima,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'alamat' => $request->alamat,
            'metode_pembayaran' => $request->metode_pembayaran,
        ]);

        return redirect()->route('payment.pay', $order->id);
    }
}