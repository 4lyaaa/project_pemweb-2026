@extends('layouts.app')

@section('title', 'Login - SweetRecipe')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">

    <div class="card-auth"
         style="max-width:420px;
                background:white;
                border-radius:20px;
                box-shadow:0 10px 40px rgba(255,102,153,.15);
                padding:40px 36px;
                border:1px solid #fce4ec;">

        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/logo_sweetrecipe_1.png') }}"
                 alt="SweetRecipe Logo"
                 style="height:60px;margin-bottom:10px;">
        </div>

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <!-- EMAIL -->
            <div class="mb-3">

                <label for="email"
                       class="form-label"
                       style="font-weight:600;color:#555;font-size:14px;">

                    <i class="fas fa-envelope"
                       style="color:#ff6699;margin-right:6px;"></i>

                    Alamat Email

                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="contoh@email.com"
                    required
                    autofocus
                    style="
                        border:2px solid #fce4ec;
                        border-radius:12px;
                        padding:12px 16px;
                        background:#fef8fa;
                        transition:.3s;
                    ">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <!-- PASSWORD -->
            <div class="mb-3">

                <label for="password"
                       class="form-label"
                       style="font-weight:600;color:#555;font-size:14px;">

                    <i class="fas fa-lock"
                       style="color:#ff6699;margin-right:6px;"></i>

                    Password

                </label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Masukkan password"
                    required
                    style="
                        border:2px solid #fce4ec;
                        border-radius:12px;
                        padding:12px 16px;
                        background:#fef8fa;
                        transition:.3s;
                    ">

                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <!-- REMEMBER + FORGOT PASSWORD -->
            <div style="
                display:flex;
                justify-content:space-between;
                align-items:center;
                margin-bottom:20px;">

                <div class="form-check">

                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        class="form-check-input"
                        style="
                            border:2px solid #fce4ec;
                            border-radius:4px;
                        ">

                    <label
                        for="remember"
                        class="form-check-label"
                        style="
                            color:#999;
                            font-size:14px;
                        ">

                        Ingat saya

                    </label>

                </div>

                <!-- TOMBOL LUPA PASSWORD -->
                <a href="{{ route('password.request') }}"
                   style="
                        color:#ff6699;
                        font-size:14px;
                        text-decoration:none;
                        font-weight:500;
                   ">

                    Lupa password?

                </a>

            </div>

            <!-- BUTTON LOGIN -->
            <button
                type="submit"
                class="btn-pink w-100 py-3"
                style="
                    background:#ff6699;
                    color:white;
                    border:none;
                    border-radius:30px;
                    font-weight:600;
                    font-size:16px;
                    transition:.3s;
                    cursor:pointer;
                    width:100%;
                ">

                <i class="fas fa-sign-in-alt me-2"></i>

                Masuk

            </button>

        </form>

        <!-- GARIS -->
        <div style="
            display:flex;
            align-items:center;
            gap:16px;
            color:#ccc;
            font-size:13px;
            margin:20px 0;">

            <hr style="flex:1;border:none;border-top:1px solid #f0e0e0;">

            <span>atau</span>

            <hr style="flex:1;border:none;border-top:1px solid #f0e0e0;">

        </div>

        <!-- REGISTER -->
        <p style="
            text-align:center;
            color:#999;
            font-size:14px;">

            Belum punya akun?

            <a href="{{ route('register') }}"
               style="
                    color:#ff6699;
                    font-weight:600;
                    text-decoration:none;
               ">

                Daftar sekarang

            </a>

        </p>

    </div>

</div>

<style>

.form-control:focus{

    border-color:#ff6699 !important;

    box-shadow:0 0 0 4px rgba(255,102,153,.15) !important;

    background:white !important;

}

.btn-pink:hover{

    background:#e55588 !important;

    transform:translateY(-2px);

    box-shadow:0 8px 25px rgba(255,102,153,.4);

}

.form-check-input:checked{

    background:#ff6699 !important;

    border-color:#ff6699 !important;

}

a:hover{

    color:#e55588 !important;

}

</style>

@endsection