<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Recipe;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalResep = 9;

        $totalUser = User::count();

        $totalPesanan = Order::count();

        $pendapatan = Order::where('status', 'paid')->sum('total');

        $pesananTerbaru = Order::latest()
            ->take(5)
            ->get();

        $resepTerbaru = Recipe::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalResep',
            'totalUser',
            'totalPesanan',
            'pendapatan',
            'pesananTerbaru',
            'resepTerbaru'
        ));
    }
}