<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'admin_id' => 'required|string',
        ]);

        // ID Admin
        if ($request->admin_id === 'admin') {

            session([
                'admin_logged_in' => true,
            ]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'admin_id' => 'ID Admin salah.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_logged_in');

        return redirect()->route('admin.login');
    }
}