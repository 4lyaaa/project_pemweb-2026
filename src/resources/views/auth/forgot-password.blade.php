@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow mx-auto" style="max-width:500px">

        <div class="card-body">

            <h3 class="text-center mb-4">
                Lupa Password
            </h3>

            <p class="text-center text-muted">
                Masukkan email akun SweetRecipe Anda.
            </p>

            {{-- Pesan Berhasil --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Pesan Gagal --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Error Validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
                        value="{{ old('email') }}"
                        required>

                </div>

                <button
                    type="submit"
                    class="btn btn-pink w-100">

                    Kirim Link Reset

                </button>
            </form>
        </div>
    </div>
</div>

@endsection