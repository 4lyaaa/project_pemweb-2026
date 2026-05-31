<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portofolio - Alya Nurul Qolbi</title>
  <meta name="description" content="Portofolio Alya Nurul Qolbi">
  <meta name="keywords" content="portofolio, web developer, ui ux">

  <link rel="icon" type="image/jpg" href="{{ asset('assets/images/logo-a.jpg') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/logo-a.jpg') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Poppins:wght@100;300;400;500;700&family=Raleway:wght@100;300;400;500;700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
  <!-- Panggil main.css -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <style>
    /* Tambahan CSS untuk membuat 3 kolom sejajar */
    .portfolio .row.gy-4 {
        display: flex;
        flex-wrap: wrap;
    }
    
    .portfolio .col-lg-4 {
        display: flex;
        flex-direction: column;
    }
    
    .portfolio-wrap {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .portfolio-image {
        width: 100%;
        height: auto !important;
        object-fit: contain;
    }
    
    .portfolio-wrap img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
    
    @media (min-width: 992px) {
        .portfolio .col-lg-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }
    }
    
    @media (min-width: 768px) and (max-width: 991px) {
        .portfolio .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }
    }
    
    @media (max-width: 767px) {
        .portfolio .col-md-6 {
            flex: 0 0 auto;
            width: 100%;
        }
    }

    /* Biar header tidak ikut ke bawah */
    .sticky-top {
        position: sticky;
        top: 0;
        z-index: 1020;
        background: white !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Jarak antar section */
    section {
        scroll-margin-top: 80px;
    }

    #about {
        padding-bottom: 60px;
        margin-bottom: 40px;
    }

    #portfolio {
        padding-top: 60px;
        margin-top: 20px;
    }

    /* Biar konten tidak terlalu nempel */
    .container {
        padding: 0 20px;
    }
  </style>

</head>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <h1 class="sitename">I'm Alya</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Showcase / Project</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1920') no-repeat center center/cover; height: 100vh;">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100 text-center">
          <div class="col-lg-8" data-aos="fade-up">
            <img src="{{ asset('assets/images/alya_2.jpeg') }}" alt="Alya" class="img-fluid rounded-circle mb-4" style="width: 200px; height: 200px; object-fit: cover; border: 5px solid white;">
            <h2 class="text-white">Haii, Saya Alya</h2>
            <p class="text-white">
              <span class="typed" data-typed-items="UI/UX Designer, Web Developer, Freelancer, Content Creator"></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section" style="margin-bottom: 60px;">
      <div class="container" data-aos="fade-up">
        <div class="row gy-5 align-items-center">
          <div class="col-lg-5">
            <img src="{{ asset('assets/images/alya_1.jpeg') }}" class="img-fluid rounded shadow portfolio-image" alt="Alya">
          </div>
          <div class="col-lg-7">
            <div class="about-info mb-4">
              <p><strong>Name:</strong> Alya Nurul Qolbi</p>
              <p><strong>Profile:</strong> Full Stack Developer</p>
              <p><strong>Email:</strong> nurulqolbialya@gmail.com</p>
              <p><strong>Phone:</strong> 083894951894</p>
            </div>
            <div class="about-me">
              <h3 class="mb-3">About Me</h3>
              <p>Haii! Saya adalah seorang mahasiswa program studi <strong>Sistem Informasi, Fakultas Ilmu Komputer</strong>.</p>
              <p>Saya adalah mahasiswa dari <strong>Universitas Esa Unggul</strong>.</p>
              <p>Saya memiliki ketertarikan pada bidang <strong>Analisis dan Perancangan Sistem</strong>, <strong>Manajemen Basis Data</strong>, serta <strong>UI/UX Design</strong>.</p>
              <p>Saya senang mengeksplorasi kreativitas digital menggunakan <strong>Figma</strong> dan <strong>Canva</strong>, serta terus belajar di bidang <strong>Web Development</strong> untuk membangun website yang interaktif, responsif, dan user-friendly.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Showcase / Project</h2>
        <p>Daftar project yang telah saya buat selama perkuliahan</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <!-- Project 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-wrap shadow rounded p-3 h-100">
              <img src="{{ asset('assets/images/toko-pastry-and-bakery.webp') }}" class="img-fluid rounded portfolio-image" alt="Project 1">
              <div class="portfolio-info mt-3">
                <h5>Pemesanan Toko Pastry and Bakery (Alnisfay)</h5>
                <p>Project Pemrograman Berorientasi Objek</p>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="portfolio-wrap shadow rounded p-3 h-100">
                  <img src="{{ asset('assets/images/kereta_api.jpg') }}" class="img-fluid rounded portfolio-image" alt="Project 2">
                  <div class="portfolio-info mt-3">
                      <h5>Sistem Pemesanan Tiket Kereta Api (TixGO)</h5>
                      <p>Project 3 Matkul (RPL, Basis Data, dan PBO)</p>
                  </div>
              </div>
          </div>

          <!-- Project 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="portfolio-wrap shadow rounded p-3 h-100">
              <img src="{{ asset('assets/images/dessert.avif') }}" class="img-fluid rounded portfolio-image" alt="Project 3">
              <div class="portfolio-info mt-3">
                <h5>SWEETRECIPE</h5>
                <p>Sistem Informasi Katalog Resep Dessert dan Rekomendasi Dessert Berbasis Website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Jika Anda memiliki pertanyaan atau ingin berkolaborasi, jangan ragu untuk menghubungi saya!</p>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="shadow rounded p-4">
              <div class="mb-3"><i class="fas fa-envelope"></i> nurulqolbialya@gmail.com</div>
              <div class="mb-3"><i class="fas fa-phone"></i> 083894951894</div>
              <div><i class="fab fa-instagram"></i> @alyanrlql</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  <script>
    AOS.init({ duration: 1000, once: true, offset: 100 });
  </script>
</body>
</html>