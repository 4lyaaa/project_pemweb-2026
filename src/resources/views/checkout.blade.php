@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<div class="container py-5">

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf

        {{-- Hidden Data Produk --}}
        <input type="hidden" name="produk_slug" value="{{ $slug }}">
        <input type="hidden" name="nama_produk" value="{{ $produk['nama'] }}">
        <input type="hidden" name="harga" value="{{ $produk['harga'] }}">
        <input type="hidden" name="jumlah" value="1">
        <input type="hidden" name="total" value="{{ $produk['harga'] }}">

        <div class="row g-4">

            {{-- ==================== INFORMASI PRODUK ==================== --}}
            <div class="col-lg-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-4">

                        <h2
                            class="text-center mb-4"
                            style="color:#ff6699;font-weight:bold;">

                            🛒 Checkout SweetRecipe

                        </h2>

                        <hr>

                        <div class="row align-items-center">

                            <div class="col-md-4 text-center">

                                <img
                                    src="{{ asset('assets/images/' . $produk['gambar']) }}"
                                    class="img-fluid rounded-4 shadow-sm"
                                    style="max-height:180px;object-fit:cover;"
                                    alt="{{ $produk['nama'] }}">

                            </div>

                            <div class="col-md-8">

                                <h3 class="fw-bold">
                                    {{ $produk['nama'] }}
                                </h3>

                                <h4 style="color:#ff6699;">
                                    Rp{{ number_format($produk['harga'],0,',','.') }}
                                </h4>

                                <p class="text-muted mb-2">
                                    {{ $produk['deskripsi'] }}
                                </p>

                                <span class="badge bg-success">
                                    ✔ Produk Tersedia
                                </span>

                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">
                            👤 Data Penerima
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Penerima
                            </label>

                            <input
                                type="text"
                                name="nama_penerima"
                                class="form-control"
                                value="{{ old('nama_penerima', $user->name) }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Nomor WhatsApp
                            </label>

                            <input
                                type="text"
                                name="nomor_whatsapp"
                                class="form-control"
                                value="{{ old('nomor_whatsapp', $user->nomor_whatsapp) }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Alamat Pengiriman
                            </label>

                            <textarea
                                name="alamat"
                                rows="4"
                                class="form-control"
                                required>{{ old('alamat', $user->alamat) }}</textarea>

                        </div>

                    </div>

                </div>

            </div>

            {{-- ==================== RINGKASAN ==================== --}}
            <div class="col-lg-5">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-body p-4">

                        <h4 class="mb-4">
                            📦 Ringkasan Pesanan
                        </h4>

                        <div class="d-flex justify-content-between">

                            <span>Produk</span>

                            <strong>
                                {{ $produk['nama'] }}
                            </strong>

                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">

                            <span>Harga</span>

                            <strong>
                                Rp{{ number_format($produk['harga'],0,',','.') }}
                            </strong>

                        </div>

                        <div class="d-flex justify-content-between mt-3">

                            <span>Jumlah</span>

                            <strong>1</strong>

                        </div>

                        <hr>

                        <div class="d-flex justify-content-between">

                            <h5>Total</h5>

                            <h4 style="color:#ff6699;">
                                Rp{{ number_format($produk['harga'],0,',','.') }}
                            </h4>

                        </div>

                        <hr>

                        <div class="mb-4">

                            <label class="form-label">
                                💳 Metode Pembayaran
                            </label>

                            <select
                                name="metode_pembayaran"
                                class="form-select"
                                required>

                                <option value="Transfer Bank">
                                    Transfer Bank
                                </option>

                                <option value="COD">
                                    COD (Bayar di Tempat)
                                </option>

                            </select>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-lg w-100"
                            style="
                                background:#ff6699;
                                color:white;
                                border-radius:30px;
                                font-size:18px;
                                font-weight:bold;">

                            🛍 Pesan Sekarang

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection