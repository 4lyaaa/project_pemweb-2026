@extends('layouts.app')

@section('title', 'Daftar - SweetRecipe')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">
    <div class="card-auth" style="max-width: 480px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(255, 102, 153, 0.15); padding: 40px 36px; border: 1px solid #fce4ec;">
        <div class="text-center mb-4">
            <!-- Logo atau ikon -->
            <img src="{{ asset('assets/images/logo_sweetrecipe_1.png') }}" alt="SweetRecipe Logo" style="height: 60px; margin-bottom: 10px;">
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-user" style="color: #ff6699; margin-right: 6px;"></i> Username
                </label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" 
                       class="form-control @error('name') is-invalid @enderror"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                       placeholder="Masukkan nama Anda" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-envelope" style="color: #ff6699; margin-right: 6px;"></i> Alamat Email
                </label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" 
                       class="form-control @error('email') is-invalid @enderror"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                       placeholder="contoh@email.com" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-lock" style="color: #ff6699; margin-right: 6px;"></i> Password
                </label>
                <input type="password" name="password" id="password" 
                       class="form-control @error('password') is-invalid @enderror"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                       placeholder="Minimal 6 karakter" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-check-circle" style="color: #ff6699; margin-right: 6px;"></i> Konfirmasi Password
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                       placeholder="Ulangi password" required>
            </div>

            <div class="mb-3">
                <label for="preferensi_rasa" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-utensils" style="color: #ff6699; margin-right: 6px;"></i> Preferensi Rasa
                </label>
                <select name="preferensi_rasa" id="preferensi_rasa" 
                        class="form-select @error('preferensi_rasa') is-invalid @enderror"
                        style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" required>
                    <option value="">Pilih rasa favorit Anda</option>
                    <option value="manis" {{ old('preferensi_rasa') == 'manis' ? 'selected' : '' }}>🍬 Manis</option>
                    <option value="asam" {{ old('preferensi_rasa') == 'asam' ? 'selected' : '' }}>🍋 Asam</option>
                    <option value="gurih" {{ old('preferensi_rasa') == 'gurih' ? 'selected' : '' }}>🧀 Gurih</option>
                    <option value="segar" {{ old('preferensi_rasa') == 'segar' ? 'selected' : '' }}>🌿 Segar</option>
                    <option value="creamy" {{ old('preferensi_rasa') == 'creamy' ? 'selected' : '' }}>🍨 Creamy</option>
                </select>
                @error('preferensi_rasa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nomor_whatsapp" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fab fa-whatsapp" style="color: #25D366; margin-right: 6px;"></i> WhatsApp <span style="color: #999; font-weight: 400;">(opsional)</span>
                </label>
                <input type="text" name="nomor_whatsapp" id="nomor_whatsapp" value="{{ old('nomor_whatsapp') }}" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                       placeholder="081234567890">
            </div>

            <div class="mb-4">
                <label for="alamat" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-map-marker-alt" style="color: #ff6b6b; margin-right: 6px;"></i> Alamat <span style="color: #999; font-weight: 400;">(opsional)</span>
                </label>
                <textarea name="alamat" id="alamat" rows="2" 
                          class="form-control"
                          style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;"
                          placeholder="Jl. Contoh No. 123, Kota">{{ old('alamat') }}</textarea>
            </div>

            <button type="submit" class="btn-pink w-100 py-3" 
                    style="background: #ff6699; color: white; border: none; border-radius: 30px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; cursor: pointer; width: 100%;">
                <i class="fas fa-user-plus me-2"></i> Daftar Sekarang
            </button>
        </form>

        <div style="display: flex; align-items: center; gap: 16px; color: #ccc; font-size: 13px; margin: 20px 0;">
            <hr style="flex: 1; border: none; border-top: 1px solid #f0e0e0;">
            <span>atau</span>
            <hr style="flex: 1; border: none; border-top: 1px solid #f0e0e0;">
        </div>

        <p style="text-align: center; color: #999; font-size: 14px;">
            Sudah punya akun? 
            <a href="{{ route('login') }}" style="color: #ff6699; font-weight: 600; text-decoration: none;">
                Masuk di sini
            </a>
        </p>
    </div>
</div>

<style>
    .form-control:focus {
        border-color: #ff6699 !important;
        box-shadow: 0 0 0 4px rgba(255, 102, 153, 0.15) !important;
        background: white !important;
    }
    .form-select:focus {
        border-color: #ff6699 !important;
        box-shadow: 0 0 0 4px rgba(255, 102, 153, 0.15) !important;
        background: white !important;
    }
    .btn-pink:hover {
        background: #e55588 !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(255, 102, 153, 0.4);
    }
</style>
@endsection