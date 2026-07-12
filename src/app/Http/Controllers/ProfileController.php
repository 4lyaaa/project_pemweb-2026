<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Tampilkan halaman profil
    public function index()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();
        
        // Jika user tidak login, redirect ke login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
        
        return view('profile.index', compact('user'));
    }

    // Update profil
    public function update(Request $request)
    {
        // Ambil user yang sedang login
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Validasi data
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'preferensi_rasa' => 'required|in:manis,asam,pahit,gurih,segar',
            'nomor_whatsapp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ];

        // Jika password diisi, validasi password
        if ($request->filled('password')) {
            $rules['password'] = 'required|string|min:6|confirmed';
        }

        $request->validate($rules);

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->preferensi_rasa = $request->preferensi_rasa;
        $user->nomor_whatsapp = $request->nomor_whatsapp;
        $user->alamat = $request->alamat;

        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}