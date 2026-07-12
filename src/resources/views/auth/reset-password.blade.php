@extends('layouts.app')

@section('title','Reset Password')

@section('content')

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow p-4"
         style="max-width:500px;width:100%;border-radius:20px;">

        <h2 class="text-center mb-3">
            Reset Password
        </h2>

        <p class="text-center text-muted mb-4">
            Silakan masukkan password baru Anda.
        </p>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('password.update') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ $email }}"
                    readonly>

            </div>
            <div class="mb-3">
                <label>Password Baru</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    required>
            </div>

            <div class="mb-4">
                <label>Konfirmasi Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    required>
            </div>

            <button
                class="btn btn-pink w-100">
                Simpan Password Baru
            </button>
        </form>
    </div>
</div>
@endsection