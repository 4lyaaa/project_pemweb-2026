<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SweetRecipe - Katalog Resep Dessert</title>
    
    <base href="http://project_pemweb.test/">
    
    <!-- FAVICON - TAMBAHKAN DISINI -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Bootstrap 5 CDN - PASTI JALAN -->
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
        }
        
        .card-product:hover {
            transform: translateY(-5px);
        }
        
        .card-product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .contact {
            background: #262526;
            padding: 60px 0;
            color: white;
        }
        
        .contact input, .contact textarea {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid #666;
            padding: 12px 0;
            margin-bottom: 20px;
            color: white;
        }
        
        .contact input::placeholder, .contact textarea::placeholder {
            color: #aaa;
        }
        
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

        /* Style untuk Rekomendasi */
         .card-rekomendasi {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
         }

         .card-rekomendasi:hover {
            transform: translateY(-5px);
         }

         .icon-box {
            width: 80px;
            height: 80px;
            background: #ff6699;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
         }

         .icon-box i {
            font-size: 40px;
            color: white;
         }

         .card-rekomendasi h4 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
         }

         .card-rekomendasi p {
            color: #666;
            margin-bottom: 20px;
         }

         .card-rekomendasi ul li {
            margin-bottom: 10px;
            color: #555;
         }

         .card-rekomendasi ul li i {
            margin-right: 10px;
         }

         .bg-light {
            background-color: #f9f9f9 !important;
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
                <li class="nav-item"><a class="nav-link" href="#rekomendasi">Rekomendasi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/semua-resep') }}">Semua Resep</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/portofolio') }}" style="color:#ff6699">Portofolio</a></li>
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
                <p class="mt-3">Katalog Resep Dessert dan Rekomendasi Dessert Berbasis Website. Temukan resep dessert favorit Anda sesuai dengan kebutuhan!</p>
                <a href="#katalog" class="btn-pink mt-2">Lihat Resep</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/banner-kue.png') }}" alt="Dessert" class="img-fluid" style="max-width: 350px; position: relative; z-index: 2;">
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
                <p>Sistem ini membantu pengguna menemukan rekomendasi dessert berdasarkan kebutuhan tertentu, seperti dessert untuk diet, rendah gula, atau penambah berat badan.</p>
                <a href="#" class="btn-pink" data-bs-toggle="modal" data-bs-target="#aboutModal">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- KATALOG SECTION -->
<section class="py-5" id="katalog">
    <div class="container">
        <h2 class="section-title">Katalog Resep Dessert</h2>
        <p class="section-subtitle">Berbagai resep dessert dengan informasi lengkap bahan dan cara membuat</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/cookies-bomb-1.png') }}" alt="Cookies Bomb">
                    <h5 class="mt-3 fw-bold">Cookies Bomb</h5>
                    <p class="text-muted">Dessert untuk membuat mood mu menjadi lebih ceria</p>
                    <a href="{{ url('/semua-resep') }}" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalCookiesBomb">Lihat Resep</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/lava_cake_1.png') }}" alt="Lava Cake">
                    <h5 class="mt-3 fw-bold">Chocolate Lava Cake</h5>
                    <p class="text-muted">Dessert meleleh dengan coklat premium</p>
                    <a href="#" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalLavaCake">Lihat Resep</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/yogurt_bowl_1.png') }}" alt="Yogurt Bowl">
                    <h5 class="mt-3 fw-bold">Fruit Yogurt Bowl</h5>
                    <p class="text-muted">Dessert sehat untuk program diet</p>
                    <a href="#" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalYogurtBowl">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/protein_pancake_1.png') }}" alt="Protein Pancake">
                    <h5 class="mt-3 fw-bold">Protein Pancake</h5>
                    <p class="text-muted">Penambah berat badan & tinggi protein</p>
                    <a href="#" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalProteinPancake">Lihat Resep</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/pudding_vanilla.png') }}" alt="Pudding">
                    <h5 class="mt-3 fw-bold">Sugar Free Pudding</h5>
                    <p class="text-muted">Dessert rendah gula untuk diabetes</p>
                    <a href="#" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalPudding">Lihat Resep</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <img src="{{ asset('assets/images/cheesecake_protein_1.png') }}" alt="Cheesecake">
                    <h5 class="mt-3 fw-bold">Cheesecake Protein</h5>
                    <p class="text-muted">High protein untuk fitness</p>
                    <a href="#" class="btn-outline-pink" data-bs-toggle="modal" data-bs-target="#modalCheesecake">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ url('/semua-resep') }}" class="btn-pink">Lihat Semua Resep</a>
        </div>
    </div>
</section>

<!-- REKOMENDASI DESSERT SECTION -->
<section class="py-5 bg-light" id="rekomendasi">
    <div class="container">
        <h2 class="section-title">Rekomendasi Dessert</h2>
        <p class="section-subtitle">Pilih sesuai kebutuhan Anda!</p>
        
        <div class="row">
            <!-- Rekomendasi Diet -->
            <div class="col-md-4">
                <div class="card-rekomendasi">
                    <div class="icon-box">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <h4>Dessert untuk Diet</h4>
                    <p>Rendah kalori, rendah gula, cocok untuk program diet Anda.</p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fas fa-check-circle text-success"></i> Fruit Yogurt Bowl</li>
                        <li><i class="fas fa-check-circle text-success"></i> Sugar Free Pudding</li>
                        <li><i class="fas fa-check-circle text-success"></i> Protein Pancake</li>
                    </ul>
                    <a href="{{ url('/rekomendasi/diet') }}" class="btn-outline-pink mt-3">Lihat Resep 😉→</a>
                </div>
            </div>
            
            <!-- Rekomendasi Mood Booster -->
            <div class="col-md-4">
                <div class="card-rekomendasi">
                    <div class="icon-box">
                        <i class="fas fa-smile-wink"></i>
                    </div>
                    <h4>Mood Booster 😍</h4>
                    <p>Dessert manis yang bikin mood kamu jadi lebih ceria!</p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fas fa-check-circle text-success"></i> Cookies Bomb</li>
                        <li><i class="fas fa-check-circle text-success"></i> Chocolate Lava Cake</li>
                        <li><i class="fas fa-check-circle text-success"></i> Cheesecake Protein</li>
                    </ul>
                    <a href="{{ url('/rekomendasi/mood') }}" class="btn-outline-pink mt-3">Lihat Resep 😉→</a>
                </div>
            </div>
            
            <!-- Rekomendasi Penambah Berat Badan -->
            <div class="col-md-4">
                <div class="card-rekomendasi">
                    <div class="icon-box">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h4>Penambah Berat Badan 💪</h4>
                    <p>Tinggi kalori, tinggi protein, cocok untuk menambah berat badan Anda.</p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="fas fa-check-circle text-success"></i> Protein Pancake</li>
                        <li><i class="fas fa-check-circle text-success"></i> Cheesecake Protein</li>
                        <li><i class="fas fa-check-circle text-success"></i> Chocolate Lava Cake</li>
                    </ul>
                    <a href="{{ url('/rekomendasi/berat') }}" class="btn-outline-pink mt-3">Lihat Resep 😉→</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Hubungi Kami</h3>
                <form>
                    <input type="text" placeholder="Nama">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="No. Telepon">
                    <textarea rows="4" placeholder="Pesan"></textarea>
                    <button class="btn-pink">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-md-6">
                <p><i class="fas fa-map-marker me-2"></i> Jakarta, Indonesia</p>
                <p><i class="fas fa-phone me-2"></i> 083894951894</p>
                <p><i class="fas fa-envelope me-2"></i> sweetrecipe@gmail.com</p>
                <p><i class="fab fa-instagram me-2"></i> @alyanrlql</p>
            </div>
        </div>
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
                <p>SweetRecipe hadir untuk menjawab kebutuhan pengguna dalam mencari resep dessert yang sesuai dengan kebutuhan mereka.</p>
                <h5>Fitur yang Tersedia</h5>
                <ul>
                    <li>Katalog resep dessert terstruktur</li>
                    <li>Rekomendasi dessert berdasarkan kebutuhan</li>
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
</body>
</html>