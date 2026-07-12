<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function show($slug)
    {
        // Data produk sementara (nanti akan dipindahkan ke database)
        $produks = [

            'cookies-bomb' => [
                'nama' => 'Cookies Bomb',
                'harga' => 25000,
                'gambar' => 'cookies-bomb-1.png',
                'deskripsi' => '1 Box',
            ],

            'cheesecake-protein' => [
                'nama' => 'Cheesecake Protein',
                'harga' => 40000,
                'gambar' => 'cheesecake_protein_1.png',
                'deskripsi' => '1 Slice',
            ],

            'protein-pancake' => [
                'nama' => 'Protein Pancake',
                'harga' => 35000,
                'gambar' => 'protein_pancake_1.png',
                'deskripsi' => '1 Box',
            ],

            'lava-cake' => [
                'nama' => 'Lava Cake',
                'harga' => 30000,
                'gambar' => 'lava_cake_1.png',
                'deskripsi' => '1 Cup',
            ],

            'mochi-matcha' => [
                'nama' => 'Mochi Matcha',
                'harga' => 30000,
                'gambar' => 'mochi.png',
                'deskripsi' => '1 Box',
            ],

            'pudding' => [
                'nama' => 'Pudding',
                'harga' => 18000,
                'gambar' => 'pudding_vanilla.png',
                'deskripsi' => '1 Cup',
            ],

            'yogurt-bowl' => [
                'nama' => 'Yogurt Bowl',
                'harga' => 35000,
                'gambar' => 'yogurt_bowl_1.png',
                'deskripsi' => '1 Bowl',
            ],

            'dubai-chewy-cookie' => [
                'nama' => 'Dubai Chewy Cookie',
                'harga' => 30000,
                'gambar' => 'dubai-chewy.png',
                'deskripsi' => '1 Box (4 pcs)',
            ],

        ];

        // Jika slug tidak ditemukan
        if (!isset($produks[$slug])) {
            abort(404);
        }

        $produk = $produks[$slug];

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