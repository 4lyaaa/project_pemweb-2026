@extends('layouts.app')

@section('title', 'Profil Saya - SweetRecipe')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">
    <div class="card-auth" style="max-width: 520px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(255, 102, 153, 0.15); padding: 40px 36px; border: 1px solid #fce4ec;">
        
        <div class="text-center mb-4">
            <!-- Profile Avatar -->
            <img src="{{ asset('assets/images/profile_user.png') }}" alt="Profile Avatar" 
                 style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin: 0 auto 15px; border: 3px solid #ff6699; box-shadow: 0 4px 15px rgba(255, 102, 153, 0.3);">
            
            <h2 style="color: #ff6699; font-weight: 700; font-size: 28px;">Profil Saya</h2>
            <p style="color: #999; font-size: 14px; margin-top: 4px;">Kelola data diri Anda</p>
        </div>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-user" style="color: #ff6699; margin-right: 6px;"></i> Nama Lengkap
                </label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-envelope" style="color: #ff6699; margin-right: 6px;"></i> Email
                </label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" required>
            </div>

            <div class="mb-3">
                <label for="preferensi_rasa" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-utensils" style="color: #ff6699; margin-right: 6px;"></i> Preferensi Rasa
                </label>
                <select name="preferensi_rasa" id="preferensi_rasa" 
                        class="form-select"
                        style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" required>
                    <option value="manis" {{ $user->preferensi_rasa == 'manis' ? 'selected' : '' }}>🍬 Manis</option>
                    <option value="asam" {{ $user->preferensi_rasa == 'asam' ? 'selected' : '' }}>🍋 Asam</option>
                    <option value="pahit" {{ $user->preferensi_rasa == 'pahit' ? 'selected' : '' }}>☕ Pahit</option>
                    <option value="gurih" {{ $user->preferensi_rasa == 'gurih' ? 'selected' : '' }}>🧀 Gurih</option>
                    <option value="segar" {{ $user->preferensi_rasa == 'segar' ? 'selected' : '' }}>🌿 Segar</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nomor_whatsapp" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fab fa-whatsapp" style="color: #25D366; margin-right: 6px;"></i> Nomor WhatsApp
                </label>
                <input type="text" name="nomor_whatsapp" id="nomor_whatsapp" 
                       value="{{ old('nomor_whatsapp', $user->nomor_whatsapp) }}" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" placeholder="081234567890">
            </div>

            <div class="mb-4">
                <label for="alamat" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-map-marker-alt" style="color: #ff6b6b; margin-right: 6px;"></i> Alamat
                </label>
                <textarea name="alamat" id="alamat" rows="2" 
                          class="form-control"
                          style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" placeholder="Jl. Contoh No. 123">{{ old('alamat', $user->alamat) }}</textarea>
            </div>

            <hr style="border: none; border-top: 1px solid #fce4ec; margin: 20px 0;">

            <div class="mb-3">
                <label for="password" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-key" style="color: #ff6699; margin-right: 6px;"></i> Password Baru <span style="color: #999; font-weight: 400;">(kosongkan jika tidak diubah)</span>
                </label>
                <input type="password" name="password" id="password" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" placeholder="Minimal 6 karakter">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label" style="font-weight: 600; color: #555; font-size: 14px;">
                    <i class="fas fa-check-circle" style="color: #ff6699; margin-right: 6px;"></i> Konfirmasi Password Baru
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="form-control"
                       style="border: 2px solid #fce4ec; border-radius: 12px; padding: 12px 16px; background: #fef8fa; transition: all 0.3s ease;" placeholder="Ulangi password baru">
            </div>

            <button type="submit" class="btn-pink w-100 py-3" 
                    style="background: #ff6699; color: white; border: none; border-radius: 30px; font-weight: 600; font-size: 16px; transition: all 0.3s ease; cursor: pointer; width: 100%;">
                <i class="fas fa-save me-2"></i> Simpan Perubahan
            </button>
        </form>

        <div class="mt-3">

    <a href="{{ route('orders.history') }}"
       class="btn w-100 py-3"
       style="background: #fff;
              color: #ff6699;
              border: 2px solid #ff6699;
              border-radius: 30px;
              font-weight: 600;
              transition: all 0.3s ease;">

        <i class="fas fa-box me-2"></i>
        Riwayat Pesanan

    </a>

</div>

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

    .btn-outline-history:hover{
    background:#ff6699 !important;
    color:white !important;
}    

</style>
@endsection