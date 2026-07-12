@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SweetRecipe - Katalog Resep Dessert</title>
 
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    
   <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #fff;
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .navbar-nav .nav-link {
            font-weight: 500;
            color: #333;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ff6699;
        }
        
        .btn-pink {
            background: #ff6699;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            border: none;
        }
        
        .btn-pink:hover {
            background: #e55588;
            color: white;
        }
        
        .btn-outline-pink {
            border: 1px solid #ff6699;
            color: #ff6699;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            background: transparent;
        }
        
        .btn-outline-pink:hover {
            background: #ff6699;
            color: white;
        }
        
        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 50px;
        }
        
        .hero {
            background: linear-gradient(135deg, #fff5f7 0%, #fff 100%);
            padding: 80px 0;
        }
        
        .hero h1 {
            font-size: 48px;
            color: #ff6699;
            font-weight: bold;
        }
        
        .about {
            background: #f9f9f9;
            padding: 80px 0;
        }
        
        .card-product {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .card-product:hover {
            transform: translateY(-5px);
        }
        
        .card-product img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-product .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-product .card-content p {
            flex: 1;
        }
        
        /* CSS Contact sudah dihapus */
        
        footer {
            background: #262526;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #444;
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 32px; }
            .section-title { font-size: 28px; }
        }

        footer {
            background: #262526;
            text-align: center;
            padding: 20px;
            border-top: 1px solid #444;
            color: white;
        }

        /*TOMBOL BELI SWEETRECIPE */

        .produk-info{
            text-align:center;
        }

        .harga-produk{
            color:#ff5c8d;
            font-size:40px;
            font-weight:700;
            margin-bottom:5px;
        }

        .satuan-produk{
            color:#ff7aa5;
            font-size:17px;
            font-weight:600;
            margin-bottom:8px;
        }

        .stok-produk{
            color:#ff9bbb;
            font-size:14px;
            font-weight:500;
        }

        .stok-produk i{
            color:#ff5c8d;
            margin-right:5px;
        }

        .btn-beli-sekarang{
            background:#ff5c8d;
            color:white;
            border:none;
            border-radius:50px;
            padding:13px 35px;
            font-size:17px;
            font-weight:600;
            transition:.3s;
            min-width:220px;
        }
  
        .btn-beli-sekarang:hover{
            background:#ff3d7a;
            color:white;
            transform:translateY(-3px);
            box-shadow:0 12px 25px rgba(255,92,141,.35);
        }

        @media (max-width:768px){
            .btn-beli-sekarang{
                width:100%;
            }
        }

        .harga-produk{
        color:#ff5c8d;
        font-size:40px;
        font-weight:700;
        margin-bottom:5px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo_sweetrecipe_1.png') }}" alt="Logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/semua-resep') }}">Semua Resep</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero" id="home" style="position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>SWEETRECIPE</h1>
                <p class="mt-3">Selamat Datang di website kami😊! Katalog Resep Dessert dengan fitur pembelian disetiap resepnya!</p>
                <a href="#katalog" class="btn-pink mt-2">Lihat Resep</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/banner-kue.png') }}" alt="Dessert" class="img-fluid" style="max-width: 250px; position: relative; z-index: 2; display: block; margin: 0 auto;">
            </div>
        </div>
    </div>
    
    <!-- Gambar dekorasi bulat - DI BELAKANG -->
    <img src="{{ asset('assets/images/banner-bg.png') }}" 
         alt="Dekorasi" 
         style="position: absolute; bottom: 0; left: 0; width: 100%; height: auto; opacity: 0.15; z-index: 1; pointer-events: none;">
</section>

<!-- ABOUT SECTION -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/about-img.png') }}" alt="About" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Tentang SWEETRECIPE</h2>
                <p>SweetRecipe adalah sistem informasi katalog resep dessert berbasis website yang bertujuan menyediakan informasi resep dessert secara terstruktur.</p>
                <p>Sistem ini tidak hanya menyediakan resep dessert saja, akan tetapi untuk Anda yang ingin langsung menikmati resep tersebut kami siap untuk melayani Anda. Selamat berbelanja😊.</p>
                <a href="#" class="btn-pink" data-bs-toggle="modal" data-bs-target="#aboutModal">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG SECTION -->
<section class="py-5" id="katalog">
    <div class="container">
        <h2 class="section-title">Katalog Resep Dessert</h2>
        <p class="section-subtitle">
            Berbagai resep dessert dengan informasi lengkap bahan dan cara membuat
        </p>

        <!-- FILTER RASA -->
        <div class="text-center mb-4">

    <button class="btn btn-pink filter-btn active" data-filter="semua">
        Semua
    </button>

    <button class="btn btn-outline-dark filter-btn" data-filter="manis">
        Manis
    </button>

    <button class="btn btn-outline-dark filter-btn" data-filter="asam">
        Asam
    </button>

    <button class="btn btn-outline-dark filter-btn" data-filter="gurih">
        Gurih
    </button>

    <button class="btn btn-outline-dark filter-btn" data-filter="asin">
        Segar
    </button>

    <button class="btn btn-outline-dark filter-btn" data-filter="asin">
        Creamy
    </button>

</div>
    <div class="row">
     <!-- Cookies Bomb -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis">
        <div class="card-product">
            <img src="{{ asset('assets/images/cookies-bomb-1.png') }}" alt="Cookies Bomb">
            <h5 class="mt-3 fw-bold">Cookies Bomb</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalCookiesBomb">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Lava Cake -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis">
        <div class="card-product">
            <img src="{{ asset('assets/images/lava_cake_1.png') }}" alt="Lava Cake">
            <h5 class="mt-3 fw-bold">Chocolate Lava Cake</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalLavaCake">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Yogurt Bowl -->
    <div class="col-md-4 mb-4 product-card" data-rasa="asam">
        <div class="card-product">
            <img src="{{ asset('assets/images/yogurt_bowl_1.png') }}" alt="Yogurt Bowl">
            <h5 class="mt-3 fw-bold">Fruit Yogurt Bowl</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalYogurtBowl">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Protein Pancake -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis">
        <div class="card-product">
            <img src="{{ asset('assets/images/protein_pancake_1.png') }}" alt="Protein Pancake">
            <h5 class="mt-3 fw-bold">Protein Pancake</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalProteinPancake">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Pudding -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis">
        <div class="card-product">
            <img src="{{ asset('assets/images/pudding_vanilla.png') }}" alt="Pudding">
            <h5 class="mt-3 fw-bold">Sugar Free Pudding</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalPudding">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Cheesecake -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis asin gurih">
        <div class="card-product">
            <img src="{{ asset('assets/images/cheesecake_protein_1.png') }}" alt="Cheesecake">
            <h5 class="mt-3 fw-bold">Cheesecake Protein</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalCheesecake">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Mochi Matcha -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis">
        <div class="card-product">
            <img src="{{ asset('assets/images/mochi.png') }}" alt="Mochi Matcha">
            <h5 class="mt-3 fw-bold">Mochi Matcha</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalMochiMatcha">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Dubai Cookie -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis gurih">
        <div class="card-product">
            <img src="{{ asset('assets/images/dubai-chewy.png') }}" alt="Dubai Cookie">
            <h5 class="mt-3 fw-bold">Dubai Chewy Cookie</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalDubaiCookie">
                Lihat Resep
            </a>
        </div>
    </div>

    <!-- Bolu Ketan -->
    <div class="col-md-4 mb-4 product-card" data-rasa="manis gurih">
        <div class="card-product">
            <img src="{{ asset('assets/images/bolu-ketan.png') }}" alt="Bolu Ketan">
            <h5 class="mt-3 fw-bold">Bolu Ketan Hitam</h5>
            <a href="javascript:void(0)" class="btn-outline-pink"
                data-bs-toggle="modal"
                data-bs-target="#modalBoluKetan">
                Lihat Resep
            </a>
        </div>
    </div>

</div>

<div class="text-center mt-4">
    <a href="{{ url('/semua-resep') }}" class="btn-pink">
        Lihat Semua Resep
    </a>
</div>
</section>

<!-- FOOTER -->
<footer>
    <p class="mb-0">2024-2026 SweetRecipe | Alya Nurul Qolbi - Universitas Esa Unggul</p>
</footer>

<!-- MODALS -->
<div class="modal fade" id="aboutModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kenalan Yuk Sama SWEETRECIPE 😁</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h5>Tentang SWEETRECIPE</h5>
                <p>SweetRecipe hadir untuk menjawab kebutuhan pengguna dalam mencari resep dessert yang tersedia fitur pembelian juga, sehingga pengguna website tidak perlu risau jika ingin langsung menyantap resep tersebut😁.</p>
                <h5>Fitur yang Tersedia</h5>
                <ul>
                    <li>Katalog resep dessert terstruktur</li>
                    <li>Pembelian disetiap resep dessert, jika anda tidak ingin membuat resep nya sendiri</li>
                    <li>Dashboard admin untuk pengelolaan data</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Include semua modal partials -->
@include('partials.cookies')
@include('partials.lava-cake')
@include('partials.yogurt-bowl')
@include('partials.protein-pancake')
@include('partials.pudding')
@include('partials.cheesecake-protein')
@include('partials.mochi-matcha')
@include('partials.dubai-chewy-cookie')
@include('partials.bolu-ketan')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function simpanResep(nama) {
    let saved = localStorage.getItem('resepTersimpan');
    let arr = saved ? JSON.parse(saved) : [];
    if (!arr.includes(nama)) {
        arr.push(nama);
        localStorage.setItem('resepTersimpan', JSON.stringify(arr));
        alert('✅ Resep "' + nama + '" berhasil disimpan!');
    } else {
        alert('⚠️ Resep "' + nama + '" sudah pernah disimpan.');
    }
}
</script>

<script>
const filterButtons = document.querySelectorAll('.filter-btn');
const productCards = document.querySelectorAll('.product-card');

filterButtons.forEach(button => {

    button.addEventListener('click', function () {

        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.classList.remove('btn-pink');
            btn.classList.add('btn-outline-dark');
        });

        this.classList.add('active');
        this.classList.remove('btn-outline-dark');
        this.classList.add('btn-pink');

        const filter = this.dataset.filter;

        productCards.forEach(card => {

            if (filter === 'semua') {
                card.style.display = '';
                return;
            }

            const rasa = card.dataset.rasa;

            if (rasa.includes(filter)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }

        });

    });

});
</script>
</body>
</html>
@endsection