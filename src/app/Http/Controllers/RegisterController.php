<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'preferensi_rasa' => 'required|in:manis,asam,pahit,gurih,segar',
            'nomor_whatsapp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'preferensi_rasa' => $request->preferensi_rasa,
        'nomor_whatsapp' => $request->nomor_whatsapp,
        'alamat' => $request->alamat,
        ]);

        Auth::login($user);

        return redirect('/')->with(
            'success',
            'Selamat datang, ' . $user->name . '!'
        );
    }
}