<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Daftar Resep - SWEETRECIPE</title>
      <meta name="description" content="Daftar resep dessert lengkap dengan bahan dan langkah pembuatan">
      <meta name="author" content="Alya Nurul Qolbi">
      
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      
      <!-- FAVICON -->
      <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
      
      <style>
         body {
            background-color: #f8f9fa;
         }
         
         .header-resep {
            background-color: #ff6699;
            padding: 20px 0;
            color: white;
            text-align: center;
            margin-bottom: 40px;
         }
         
         .header-resep h1 {
            margin: 0;
            font-size: 36px;
         }
         
         .header-resep p {
            margin: 10px 0 0;
            opacity: 0.9;
         }
         
         .back-btn {
            position: absolute;
            top: 25px;
            left: 30px;
            background: white;
            color: #ff6699;
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
         }
         
         .back-btn:hover {
            background: #f0f0f0;
            color: #e55588;
            text-decoration: none;
         }
         
         .resep-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
         }
         
         .resep-card:hover {
            transform: translateY(-5px);
         }
         
         .resep-card-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
         }
         
         .resep-card-body {
            padding: 20px;
         }
         
         .resep-card-title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
         }
         
         .resep-card-desc {
            color: #666;
            margin-bottom: 15px;
         }
         
         .btn-lihat-resep {
            background-color: #ff6699;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 25px;
            cursor: pointer;
            margin-right: 10px;
         }
         
         .btn-lihat-resep:hover {
            background-color: #e55588;
            color: white;
         }
         
         .btn-simpan-resep {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 25px;
            cursor: pointer;
         }
         
         .btn-simpan-resep:hover {
            background-color: #218838;
            color: white;
         }
         
         .resep-tersimpan {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            display: none;
         }
         
         .modal-resep-img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
         }
         
         .container-resep {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
         }
         
         .row-resep {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
         }
         
         footer {
            text-align: center;
            padding: 30px;
            background-color: #333;
            color: white;
            margin-top: 50px;
         }
      </style>
   </head>
   <body>
      
      <!-- HEADER -->
      <div class="header-resep">
         <a href="{{ url('/') }}" class="back-btn">← Kembali ke Beranda</a>
         <h1>📖 Daftar Resep SweetRecipe</h1>
         <p>Kumpulan resep dessert lengkap dengan bahan dan langkah pembuatan</p>
      </div>
      
      <div class="container-resep">
         <div class="row-resep">
            
            <!-- CARD RESEP 1: COOKIES BOMB -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/cookies_bomb.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🍪 Cookies Bomb</h3>
                  <p class="resep-card-desc">Dessert untuk membuat mood mu menjadi lebih ceria (๑˃ᴗ˂)</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalCookiesBomb">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Cookies Bomb')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanCookiesMsg">✅ Resep Cookies Bomb telah disimpan!</div>
               </div>
            </div>
            
            <!-- CARD RESEP 2: CHOCOLATE LAVA CAKE -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/lava_cake.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🍫 Chocolate Lava Cake</h3>
                  <p class="resep-card-desc">Dessert meleleh dengan coklat premium</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalLavaCake">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Chocolate Lava Cake')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanLavaMsg">✅ Resep Chocolate Lava Cake telah disimpan!</div>
               </div>
            </div>
            
            <!-- CARD RESEP 3: FRUIT YOGURT BOWL -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/yougurt_bowl.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🥣 Fruit Yogurt Bowl</h3>
                  <p class="resep-card-desc">Dessert sehat untuk program diet</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalYogurtBowl">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Fruit Yogurt Bowl')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanYogurtMsg">✅ Resep Fruit Yogurt Bowl telah disimpan!</div>
               </div>
            </div>
            
            <!-- CARD RESEP 4: PROTEIN PANCAKE -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/protein_pancake.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🥞 Protein Pancake</h3>
                  <p class="resep-card-desc">Penambah berat badan & tinggi protein</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalProteinPancake">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Protein Pancake')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanProteinMsg">✅ Resep Protein Pancake telah disimpan!</div>
               </div>
            </div>
            
            <!-- CARD RESEP 5: SUGAR FREE PUDDING -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/pudding_vanilla.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🍮 Sugar Free Pudding</h3>
                  <p class="resep-card-desc">Dessert rendah gula untuk diabetes</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalPudding">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Sugar Free Pudding')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanPuddingMsg">✅ Resep Sugar Free Pudding telah disimpan!</div>
               </div>
            </div>
            
            <!-- CARD RESEP 6: CHEESECAKE PROTEIN -->
            <div class="resep-card">
               <img src="{{ asset('assets/images/cheesecake_protein.png') }}" class="resep-card-img">
               <div class="resep-card-body">
                  <h3 class="resep-card-title">🍰 Cheesecake Protein</h3>
                  <p class="resep-card-desc">High protein untuk fitness</p>
                  <button class="btn-lihat-resep" data-toggle="modal" data-target="#modalCheesecake">👀 Lihat Resep</button>
                  <button class="btn-simpan-resep" onclick="simpanResep('Cheesecake Protein')">📖 Simpan Resep</button>
                  <div class="resep-tersimpan" id="simpanCheesecakeMsg">✅ Resep Cheesecake Protein telah disimpan!</div>
               </div>
            </div>
            
         </div>
      </div>
      
      <!-- INCLUDE SEMUA MODAL -->
      @include('partials.modal-cookies')
      @include('partials.modal-lava')
      @include('partials.modal-yogurt')
      @include('partials.modal-protein')
      @include('partials.modal-pudding')
      @include('partials.modal-cheesecake')
      
      <footer>
         <p>2024-2026 SweetRecipe | Katalog Resep Dessert dan Rekomendasi Dessert | Alya Nurul Qolbi - Universitas Esa Unggul</p>
      </footer>
      
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
      
      <script>
         // Fitur simpan resep ke localStorage
         function simpanResep(namaResep) {
            let resepTersimpan = localStorage.getItem('resepTersimpan');
            if (resepTersimpan) {
               resepTersimpan = JSON.parse(resepTersimpan);
            } else {
               resepTersimpan = [];
            }
            
            if (!resepTersimpan.includes(namaResep)) {
               resepTersimpan.push(namaResep);
               localStorage.setItem('resepTersimpan', JSON.stringify(resepTersimpan));
               
               let msgId = '';
               if (namaResep === 'Cookies Bomb') msgId = 'simpanCookiesMsg';
               else if (namaResep === 'Chocolate Lava Cake') msgId = 'simpanLavaMsg';
               else if (namaResep === 'Fruit Yogurt Bowl') msgId = 'simpanYogurtMsg';
               else if (namaResep === 'Protein Pancake') msgId = 'simpanProteinMsg';
               else if (namaResep === 'Sugar Free Pudding') msgId = 'simpanPuddingMsg';
               else if (namaResep === 'Cheesecake Protein') msgId = 'simpanCheesecakeMsg';
               
               if (msgId) {
                  let msg = document.getElementById(msgId);
                  msg.style.display = 'block';
                  setTimeout(() => {
                     msg.style.display = 'none';
                  }, 2000);
               }
               
               alert('✅ Resep "' + namaResep + '" berhasil disimpan!');
            } else {
               alert('⚠️ Resep "' + namaResep + '" sudah pernah disimpan sebelumnya.');
            }
         }
      </script>
   </body>
</html>