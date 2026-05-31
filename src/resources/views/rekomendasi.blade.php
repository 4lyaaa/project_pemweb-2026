<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekomendasi - SWEETRECIPE</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #f9f9f9 100%);
        }
        
        .header-page {
            background: linear-gradient(135deg, #ff6699 0%, #ff3366 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header-page::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .header-page h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }
        
        .header-page p {
            font-size: 18px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }
        
        .btn-back {
            background: white;
            color: #ff6699;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }
        
        .btn-back:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: #e55588;
        }
        
        .card-resep {
            background: white;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .card-resep::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ff6699, #ff3366);
            transition: left 0.3s ease;
        }
        
        .card-resep:hover::before {
            left: 0;
        }
        
        .card-resep:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .card-resep h5 {
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 10px 0;
            color: #333;
        }
        
        .card-resep p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }
        
        .btn-lihat {
            border: 2px solid #ff6699;
            color: #ff6699;
            padding: 8px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .btn-lihat:hover {
            background: #ff6699;
            color: white;
            transform: scale(1.05);
        }
        
        .badge-info {
            display: inline-block;
            background: #f0f0f0;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin: 0 5px;
        }
        
        footer {
            background: #262526;
            text-align: center;
            padding: 20px;
            color: white;
            margin-top: 50px;
        }
        
        @media (max-width: 768px) {
            .header-page h1 { font-size: 32px; }
            .header-page p { font-size: 14px; padding: 0 20px; }
            .card-resep { margin-bottom: 20px; }
        }
    </style>
</head>
<body>

@php
    $kategori = request('kategori');
    
    $icons = [
        'diet' => '🍎',
        'mood' => '😍',
        'berat' => '💪'
    ];
    
    $data = [
        'diet' => [
            'title' => 'Dessert untuk Diet',
            'desc' => 'Rendah kalori, rendah gula, cocok untuk program diet Anda',
            'resep' => [
                ['nama' => 'Fruit Yogurt Bowl', 'gambar' => 'yogurt_bowl_1.png', 'link' => 'yogurt-bowl', 'desc' => 'Dessert sehat untuk program diet', 'waktu' => '10 menit', 'tingkat' => 'Mudah'],
                ['nama' => 'Sugar Free Pudding', 'gambar' => 'pudding_vanilla.png', 'link' => 'sugar-free-pudding', 'desc' => 'Dessert rendah gula untuk diabetes', 'waktu' => '20 menit', 'tingkat' => 'Mudah'],
                ['nama' => 'Protein Pancake', 'gambar' => 'protein_pancake_1.png', 'link' => 'protein-pancake', 'desc' => 'Penambah berat badan & tinggi protein', 'waktu' => '15 menit', 'tingkat' => 'Sedang']
            ]
        ],
        'mood' => [
            'title' => 'Mood Booster',
            'desc' => 'Dessert manis yang bikin mood kamu jadi lebih ceria!',
            'resep' => [
                ['nama' => 'Cookies Bomb', 'gambar' => 'cookies-bomb-1.png', 'link' => 'cookies-bomb', 'desc' => 'Dessert untuk membuat mood mu menjadi lebih ceria', 'waktu' => '30 menit', 'tingkat' => 'Sedang'],
                ['nama' => 'Chocolate Lava Cake', 'gambar' => 'lava_cake_1.png', 'link' => 'lava-cake', 'desc' => 'Dessert meleleh dengan coklat premium', 'waktu' => '25 menit', 'tingkat' => 'Sulit'],
                ['nama' => 'Cheesecake Protein', 'gambar' => 'cheesecake_protein_1.png', 'link' => 'cheesecake-protein', 'desc' => 'High protein untuk fitness', 'waktu' => '60 menit', 'tingkat' => 'Sulit']
            ]
        ],
        'berat' => [
            'title' => 'Penambah Berat Badan',
            'desc' => 'Tinggi kalori, tinggi protein, cocok untuk menambah berat badan',
            'resep' => [
                ['nama' => 'Protein Pancake', 'gambar' => 'protein_pancake_1.png', 'link' => 'protein-pancake', 'desc' => 'Penambah berat badan & tinggi protein', 'waktu' => '15 menit', 'tingkat' => 'Sedang'],
                ['nama' => 'Cheesecake Protein', 'gambar' => 'cheesecake_protein_1.png', 'link' => 'cheesecake-protein', 'desc' => 'High protein untuk fitness', 'waktu' => '60 menit', 'tingkat' => 'Sulit'],
                ['nama' => 'Chocolate Lava Cake', 'gambar' => 'lava_cake_1.png', 'link' => 'lava-cake', 'desc' => 'Dessert meleleh dengan coklat premium', 'waktu' => '25 menit', 'tingkat' => 'Sulit']
            ]
        ]
    ];
    
    $active = $data[$kategori] ?? $data['diet'];
    $icon = $icons[$kategori] ?? '🍰';
    
    function getModalId($link) {
        $map = [
            'yogurt-bowl' => 'modalYogurtBowl',
            'sugar-free-pudding' => 'modalPudding',
            'protein-pancake' => 'modalProteinPancake',
            'cookies-bomb' => 'modalCookiesBomb',
            'lava-cake' => 'modalLavaCake',
            'cheesecake-protein' => 'modalCheesecake'
        ];
        return $map[$link] ?? 'modalYogurtBowl';
    }
@endphp

<div class="header-page">
    <div class="container">
        <h1>{{ $icon }} {{ $active['title'] }}</h1>
        <p>{{ $active['desc'] }}</p>
        <a href="javascript:history.back()" class="btn-back">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<div class="container py-5">
    <div class="row" id="resep-container">
        @foreach($active['resep'] as $resep)
        <div class="col-md-4">
            <div class="card-resep">
                <img src="/assets/images/{{ $resep['gambar'] }}" alt="{{ $resep['nama'] }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px; margin-bottom: 15px;">
                <h5 class="mt-3">{{ $resep['nama'] }}</h5>
                <p class="text-muted">{{ $resep['desc'] }}</p>
                <div class="d-flex justify-content-center gap-3 mb-3">
                    <span class="badge-info">
                        <i class="far fa-clock"></i> {{ $resep['waktu'] }}
                    </span>
                    <span class="badge-info">
                        <i class="fas fa-signal"></i> {{ $resep['tingkat'] }}
                    </span>
                </div>
                <a href="#" class="btn-lihat" data-bs-toggle="modal" data-bs-target="#{{ getModalId($resep['link']) }}">
                    Lihat Resep <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer>
    <p>2024-2026 SweetRecipe | Alya Nurul Qolbi - Universitas Esa Unggul</p>
</footer>

<!-- INCLUDE SEMUA MODAL PARTIALS -->
@include('partials.cookies')
@include('partials.lava-cake')
@include('partials.yogurt-bowl')
@include('partials.protein-pancake')
@include('partials.pudding')
@include('partials.cheesecake-protein')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('resep-container');
        if (container) {
            container.style.opacity = '0';
            setTimeout(() => {
                container.style.transition = 'opacity 0.5s ease';
                container.style.opacity = '1';
            }, 100);
        }
    });
    
    document.querySelectorAll('.btn-back').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            window.history.back();
        });
    });
</script>
</body>
</html>