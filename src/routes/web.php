<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransCallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\OrderHistoryController;


Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

// ========== ROUTE AUTHENTICATION (LOGIN & REGISTER) ==========

// Halaman login & register (tanpa middleware)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ========== ROUTE PROFIL (HARUS LOGIN) ==========
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// ========== ROUTE WEBSITE ==========

// Route untuk HOME PAGE (arah ke home.blade.php)
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Route untuk ABOUT (arah ke dessert karena satu halaman)
Route::get('/about', function () {
    return view('home');  // ← diubah dari 'dessert' ke 'home'
});

// Route untuk SEMUA RESEP
Route::get('/semua-resep', function () {
    return view('semua-resep');
})->name('semua-resep');

// Route untuk REKOMENDASI berdasarkan kategori (diet, mood, berat)
Route::get('/rekomendasi/{kategori}', function ($kategori) {
    return view('rekomendasi', ['kategori' => $kategori]);
})->name('rekomendasi');

// Route untuk DETAIL RESEP (wajib ada)
Route::get('/resep/{id}', function ($id) {
    return view('semua-resep', ['id' => $id]);
})->name('resep.detail');

//Route untuk halaman checkout (harus login)
Route::get('/checkout/{slug}', [CheckoutController::class, 'show'])
    ->middleware('auth')
    ->name('checkout');

Route::post('/checkout', [CheckoutController::class, 'store'])
    ->middleware('auth')
    ->name('checkout.store');

//Route untuk Payment (harus login)
Route::get('/payment/{order}', [PaymentController::class, 'pay'])
    ->middleware('auth')
    ->name('payment.pay');

//Route untuk halaman forgot password
Route::get('/forgot-password',
    [ForgotPasswordController::class,'index'])
    ->name('password.request');

Route::post('/forgot-password',
    [ForgotPasswordController::class,'send'])
    ->name('password.email');

//  Route untuk menampilkan form reset password
Route::get(
    '/reset-password/{email}',
    [ForgotPasswordController::class, 'showResetForm']
)->name('password.reset');

Route::post(
    '/reset-password',
    [ForgotPasswordController::class, 'resetPassword']
)->name('password.update');

// Route untuk Midtrans Callback
Route::post('/midtrans/callback', [MidtransCallbackController::class, 'handle'])
    ->name('midtrans.callback');

//Route untuk halaman admin login
Route::get('/admin/login', [AdminLoginController::class, 'index'])
    ->name('admin.login');

//Route untuk halaman admin dashboard
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

//Route untuk resep admin
Route::resource('/admin/resep', RecipeController::class);

//Route untuk halaman admin rasa
Route::resource('/admin/rasa', FlavorController::class);

//Route untuk halaman admin pesanan
Route::resource('/admin/pesanan', OrderController::class);

//Route untuk halaman admin user
Route::resource('/admin/user', UserController::class);

//Route untuk halaman riwayat pesanan user
Route::get('/riwayat-pesanan', [OrderHistoryController::class, 'index'])
    ->middleware('auth')
    ->name('orders.history');