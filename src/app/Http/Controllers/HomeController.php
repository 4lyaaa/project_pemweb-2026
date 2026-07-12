<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $rasa = $request->get('rasa');

        $products = Product::where('status', true);

        if ($rasa && $rasa != 'semua') {
            $products->where('rasa', 'LIKE', "%{$rasa}%");
        }

        $products = $products->get();

        return view('home', compact('products', 'rasa'));
    }
}