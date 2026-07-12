<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SweetRecipe - Katalog Resep Dessert')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
        body {
            background: #fdf6f8;
        }
        
        /* ===== NAVBAR PINK ===== */
        .navbar-pink {
            background: linear-gradient(135deg, #ff6699 0%, #ff8aae 100%);
            padding: 12px 0;
            box-shadow: 0 2px 15px rgba(255, 102, 153, 0.3);
        }
        .navbar-pink .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: white !important;
        }
        .navbar-pink .navbar-brand span {
            color: #fff5f7;
        }
        .navbar-pink .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .navbar-pink .nav-link:hover {
            color: white !important;
            transform: scale(1.05);
        }
        
        /* Button di navbar */
        .btn-pink-nav {
            background: white;
            color: #ff6699 !important;
            padding: 8px 22px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-pink-nav:hover {
            background: #fff5f7;
            transform: scale(1.05);
            color: #e55588 !important;
        }
        .btn-outline-nav {
            border: 2px solid white;
            color: white !important;
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: transparent;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-outline-nav:hover {
            background: white;
            color: #ff6699 !important;
        }
        .btn-logout-nav {
            background: transparent;
            border: 1.5px solid rgba(255,255,255,0.5);
            color: white;
            padding: 6px 16px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-logout-nav:hover {
            background: rgba(255,255,255,0.2);
            border-color: white;
        }
        .badge-user {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 14px;
            backdrop-filter: blur(4px);
        }
        .badge-user i {
            margin-right: 6px;
        }
        
        /* ===== CARD AUTH ===== */
        .card-auth {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(255, 102, 153, 0.15);
            padding: 40px 36px;
            max-width: 440px;
            width: 100%;
            border: 1px solid #fce4ec;
        }
        .card-auth .btn-pink {
            background: #ff6699;
            color: white;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
        }
        .card-auth .btn-pink:hover {
            background: #e55588;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 102, 153, 0.4);
        }
        .card-auth .form-control {
            border: 2px solid #fce4ec;
            border-radius: 12px;
            padding: 12px 16px;
            background: #fef8fa;
            transition: all 0.3s ease;
        }
        .card-auth .form-control:focus {
            border-color: #ff6699;
            box-shadow: 0 0 0 4px rgba(255, 102, 153, 0.15);
            background: white;
        }
        .card-auth .form-select {
            border: 2px solid #fce4ec;
            border-radius: 12px;
            padding: 12px 16px;
            background: #fef8fa;
            transition: all 0.3s ease;
        }
        .card-auth .form-select:focus {
            border-color: #ff6699;
            box-shadow: 0 0 0 4px rgba(255, 102, 153, 0.15);
            background: white;
        }
        .card-auth .form-label {
            font-weight: 600;
            color: #555;
            font-size: 14px;
        }
        .card-auth .form-label i {
            margin-right: 6px;
        }
        .link-auth {
            color: #ff6699;
            font-weight: 600;
            text-decoration: none;
        }
        .link-auth:hover {
            color: #e55588;
            text-decoration: underline;
        }
        .auth-divider {
            display: flex;
            align-items: center;
            gap: 16px;
            color: #ccc;
            font-size: 13px;
            margin: 20px 0;
        }
        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #f0e0e0;
        }
        
        /* ===== FLASH MESSAGES ===== */
        .alert-custom {
            border-radius: 12px;
            padding: 12px 20px;
        }
        .alert-success-custom {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
        }
        .alert-danger-custom {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
        }
        
        /* ===== FOOTER ===== */
        .footer-pink {
            background: #262526;
            color: #aaa;
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #444;
            font-size: 14px;
        }
        .footer-pink .heart {
            color: #ff6699;
        }
    </style>
    @stack('styles')
</head>
<body>

<!-- ===== NAVBAR PINK ===== -->
<nav class="navbar navbar-expand-lg navbar-pink sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            Sweet<span>Recipe</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-2">
                <!-- Link website (tampil untuk semua) -->
                <li class="nav-item"><a class="nav-link" href="/#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/#katalog">Katalog</a></li>
                <li class="nav-item"><a class="nav-link" href="/#rekomendasi">Rekomendasi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/semua-resep') }}">Semua Resep</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                
                @auth
                    <!-- ===== TAMPILAN USER LOGIN ===== -->
                    <li class="nav-item">
                        <span class="badge-user">
                            <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="btn-outline-nav" style="font-size: 13px; padding: 5px 16px;">
                            <i class="fas fa-user"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn-logout-nav" style="font-size: 13px; padding: 5px 14px;">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </li>
                @else
                    <!-- ===== TAMPILAN USER BELUM LOGIN ===== -->
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn-outline-nav" style="font-size: 13px; padding: 5px 16px;">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn-pink-nav" style="font-size: 13px; padding: 5px 18px;">
                            <i class="fas fa-user-plus"></i> Daftar
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- ===== FLASH MESSAGES ===== -->
@if(session('success'))
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 12px; background: #f0fdf4; border: 1px solid #bbf7d0; color: #166534;">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 12px; background: #fef2f2; border: 1px solid #fecaca; color: #991b1b;">
            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif

@if($errors->any())
    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="border-radius: 12px; background: #fef2f2; border: 1px solid #fecaca; color: #991b1b;">
            <i class="fas fa-exclamation-circle me-2"></i> 
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif

<!-- ===== CONTENT ===== -->
<main>
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')
</body>
</html>