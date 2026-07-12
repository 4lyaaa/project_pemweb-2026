<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semua Resep - SWEETRECIPE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f9f9f9;
        }
        
        .header-page {
            background: #ff6699;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .header-page h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }
        
        .btn-back {
            background: white;
            color: #ff6699;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        
        .btn-back:hover {
            background: #f0f0f0;
            color: #e55588;
        }
        
        .card-resep {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .card-resep:hover {
            transform: translateY(-5px);
        }
        
        .card-resep img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .card-resep .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-top: 15px;
        }
        
        .card-resep h5 {
            font-weight: 700;
            margin-top: 10px;
            margin-bottom: 8px;
            color: #333;
        }
        
        .card-resep p {
            color: #666;
            margin-bottom: 15px;
            flex: 1;
        }
        
        .btn-lihat-resep {
            border: 1px solid #ff6699;
            color: #ff6699;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
            align-self: center;
        }
        
        .btn-lihat-resep:hover {
            background: #ff6699;
            color: white;
        }
        
        footer {
            background: #262526;
            text-align: center;
            padding: 20px;
            color: white;
            margin-top: 50px;
        }
        
        /* Fix height agar semua card sama */
        .row-equal-height {
            display: flex;
            flex-wrap: wrap;
        }
        
        .row-equal-height .col-md-4 {
            display: flex;
            flex-direction: column;
        }

        .modal-resep-img{
        width:250px !important;
        height:250px !important;
        object-fit:contain !important;
        display:block;
        margin:20px auto;
        border-radius:12px;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header-page">
    <div class="container">
        <h1>📖 Semua Resep SweetRecipe</h1>
        <p>Kumpulan lengkap resep dessert favorit Anda</p>
        <a href="{{ url('/') }}" class="btn-back">← Kembali ke Beranda</a>
    </div>
</div>

<!-- DAFTAR SEMUA RESEP -->
<div class="container py-5">
    <div class="row row-equal-height">
        
        <!-- Resep 1: Cookies Bomb -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/cookies-bomb-1.png') }}" alt="Cookies Bomb">
                <div class="card-body">
                    <h5>🍪 Cookies Bomb</h5>
                    <p>Dessert untuk membuat mood mu menjadi lebih ceria</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalCookiesBomb">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 2: Chocolate Lava Cake -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/lava_cake_1.png') }}" alt="Lava Cake">
                <div class="card-body">
                    <h5>🍫 Chocolate Lava Cake</h5>
                    <p>Dessert meleleh dengan coklat premium</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalLavaCake">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 3: Fruit Yogurt Bowl -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/yogurt_bowl_1.png') }}" alt="Yogurt Bowl">
                <div class="card-body">
                    <h5>🥣 Fruit Yogurt Bowl</h5>
                    <p>Dessert sehat untuk program diet</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalYogurtBowl">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 4: Protein Pancake -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/protein_pancake_1.png') }}" alt="Protein Pancake">
                <div class="card-body">
                    <h5>🥞 Protein Pancake</h5>
                    <p>Penambah berat badan & tinggi protein</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalProteinPancake">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 5: Sugar Free Pudding -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/pudding_vanilla.png') }}" alt="Pudding">
                <div class="card-body">
                    <h5>🍮 Sugar Free Pudding</h5>
                    <p>Dessert rendah gula untuk diabetes</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalPudding">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 6: Cheesecake Protein -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/cheesecake_protein_1.png') }}" alt="Cheesecake">
                <div class="card-body">
                    <h5>🍰 Cheesecake Protein</h5>
                    <p>High protein untuk fitness</p>
                    <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalCheesecake">Lihat Resep</a>
                </div>
            </div>
        </div>
        
        <!-- Resep 7: Mochi Matcha -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/mochi.png') }}" alt="Mochi Matcha">

                <div class="card-body">
                    <h5>🍡 Mochi Matcha</h5>

                    <p>Mochi lembut dengan isian krim matcha premium yang lumer di mulut.</p>

                    <a href="#"
                    class="btn-lihat-resep"
                    data-bs-toggle="modal"
                    data-bs-target="#modalMochiMatcha">Lihat Resep
                    </a>
                </div>
            </div>
        </div>

        <!-- Resep 8: Bolu Ketan Hitam -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/bolu-ketan.png') }}" alt="Bolu Ketan Hitam">

                <div class="card-body">
                    <h5>🍰 Bolu Ketan Hitam</h5>

                    <p>Bolu ketan hitam yang lembut dengan tekstur empuk dan cita rasa manis yang khas.</p>

                    <a href="#"
                    class="btn-lihat-resep"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBoluKetan">Lihat Resep
                    </a>
                </div>
            </div>
        </div>

        <!-- Resep 9: Dubai Chewy Cookie -->
<div class="col-md-4">
    <div class="card-resep">
        <img src="{{ asset('assets/images/dubai-chewy.png') }}" alt="Dubai Chewy Cookie">
        <div class="card-body">
            <h5>🍪 Dubai Chewy Cookie</h5>
            <p>Cookies viral dengan isian pistachio dan kataifi yang renyah serta lapisan marshmallow cokelat yang lembut.</p>
            <a href="#"
               class="btn-lihat-resep"
               data-bs-toggle="modal"
               data-bs-target="#modalDubaiCookie">Lihat Resep
            </a>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PARTIALS (panggil modal yang sama) -->
@include('partials.cookies')
@include('partials.lava-cake')
@include('partials.yogurt-bowl')
@include('partials.protein-pancake')
@include('partials.pudding')
@include('partials.cheesecake-protein')
@include('partials.mochi-matcha')
@include('partials.bolu-ketan')
@include('partials.dubai-chewy-cookie')

<footer>
    <p>2024-2026 SweetRecipe | Alya Nurul Qolbi - Universitas Esa Unggul</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
</script>
</body>
</html>