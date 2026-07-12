<?php

namespace App\Http\Controllers;

use App\Mail\PasswordChangedMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /**
     * Menampilkan halaman Lupa Password
     */
    public function index()
    {
        return view('auth.forgot-password');
    }

    /**
     * Memproses permintaan Lupa Password
     */
    public function send(Request $request)
    {
        // Validasi email
        $request->validate([
            'email' => 'required|email'
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Jika email tidak ditemukan
        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        return redirect()->route('password.reset', [
            'email' => $request->email
        ]);
    }

    /**
     * Menampilkan halaman Reset Password
     */
    public function showResetForm($email)
    {
        return view('auth.reset-password', [
            'email' => $email
        ]);
    }

    /**
     * Memproses Reset Password
     */
    public function resetPassword(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Cari user
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        // Simpan password baru
        $user->password = Hash::make($request->password);
        $user->save();

        // Kirim email notifikasi
        Mail::to($user->email)
            ->send(new PasswordChangedMail($user));

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Password berhasil diubah. Silakan login menggunakan password baru Anda.'
            );
    }
}