<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

// ========== ROUTE WEBSITE KAMU ==========

// Route untuk HOME PAGE (HANYA 1 KALI)
Route::get('/', function () {
    return view('dessert');
});

// Route untuk PORTOFOLIO
Route::get('/portofolio', function () {
    return view('portofolio');  
});

// Route untuk ABOUT (arah ke dessert karena satu halaman)
Route::get('/about', function () {
    return view('dessert');  
});

// Route untuk SEMUA RESEP
Route::get('/semua-resep', function () {
    return view('semua-resep');
});

// Route untuk REKOMENDASI berdasarkan kategori (diet, mood, berat)
Route::get('/rekomendasi/{kategori}', function ($kategori) {
    return view('rekomendasi', ['kategori' => $kategori]);
});

// Route untuk DETAIL RESEP (wajib ada)
Route::get('/resep/{id}', function ($id) {
    return view('semua-resep', ['id' => $id]);
})->name('semua-resep');

