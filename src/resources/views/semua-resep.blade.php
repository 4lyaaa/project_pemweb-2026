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
        
        .btn-lihat-resep {
            border: 1px solid #ff6699;
            color: #ff6699;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
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
    <div class="row">
        
        <!-- Resep 1: Cookies Bomb -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/cookies-bomb-1.png') }}" alt="Cookies Bomb">
                <h5 class="mt-3 fw-bold">🍪 Cookies Bomb</h5>
                <p class="text-muted">Dessert untuk membuat mood mu menjadi lebih ceria</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalCookiesBomb">Lihat Resep</a>
            </div>
        </div>
        
        <!-- Resep 2: Chocolate Lava Cake -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/lava_cake_1.png') }}" alt="Lava Cake">
                <h5 class="mt-3 fw-bold">🍫 Chocolate Lava Cake</h5>
                <p class="text-muted">Dessert meleleh dengan coklat premium</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalLavaCake">Lihat Resep</a>
            </div>
        </div>
        
        <!-- Resep 3: Fruit Yogurt Bowl -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/yogurt_bowl_1.png') }}" alt="Yogurt Bowl">
                <h5 class="mt-3 fw-bold">🥣 Fruit Yogurt Bowl</h5>
                <p class="text-muted">Dessert sehat untuk program diet</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalYogurtBowl">Lihat Resep</a>
            </div>
        </div>
        
        <!-- Resep 4: Protein Pancake -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/protein_pancake_1.png') }}" alt="Protein Pancake">
                <h5 class="mt-3 fw-bold">🥞 Protein Pancake</h5>
                <p class="text-muted">Penambah berat badan & tinggi protein</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalProteinPancake">Lihat Resep</a>
            </div>
        </div>
        
        <!-- Resep 5: Sugar Free Pudding -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/pudding_vanilla.png') }}" alt="Pudding">
                <h5 class="mt-3 fw-bold">🍮 Sugar Free Pudding</h5>
                <p class="text-muted">Dessert rendah gula untuk diabetes</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalPudding">Lihat Resep</a>
            </div>
        </div>
        
        <!-- Resep 6: Cheesecake Protein -->
        <div class="col-md-4">
            <div class="card-resep">
                <img src="{{ asset('assets/images/cheesecake_protein_1.png') }}" alt="Cheesecake">
                <h5 class="mt-3 fw-bold">🍰 Cheesecake Protein</h5>
                <p class="text-muted">High protein untuk fitness</p>
                <a href="#" class="btn-lihat-resep" data-bs-toggle="modal" data-bs-target="#modalCheesecake">Lihat Resep</a>
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

<footer>
    <p>2024-2026 SweetRecipe | Alya Nurul Qolbi - Universitas Esa Unggul</p>
</footer>

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