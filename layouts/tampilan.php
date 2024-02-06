<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="sub-styles.css" />
    <link href="assets/img/logo_bjn.png" rel="icon">
    <title>KP-IPLM</title>
    <style>
        .nav__logo {
            display: flex;
            align-items: center;
        }

        .nav__logo img {
            /* margin-right: 10px;  */
            width: 82px; 
            height: 70px;
        }
    </style>
  </head>
  <body>
    <!-- Awal Naviasi -->
    <nav>
      <div class="nav__logo"><img src="assets/img/Logo-Kabupaten-Bojonegoro.png" width="20px" height="" alt="Logo Pemerintah Kabupaten Bojonegoro"> DINAS PERPUSTAKAAN DAN KEARSIPAN <br>KABUPATEN BOJONEGORO</br></div>
      <ul class="nav__links">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#category">Kategori</a></li>
        <li class="link"><a href="#lokasi">Lokasi</a></li>
        <li class="link"><a href="#koleksi">Koleksi</a></li>
        <li class="link"><a href="#team">Team</a></li>
      </ul>
      <a href="form/hasil_iplm.php"><button class="btn">Hasil IPLM</button></a>

    </nav>
    <!-- End Navigasi -->

    <!-- Awal Header -->
    <header id="home">
      <div class="section__container header__container" style="margin-top: 70px">
        <div class="header__image">
          <img src="assets/pp.png" alt="header" />
          <img src="assets/buku.png" alt="header" />
        </div>
        <div class="header__content">
          <div>
            <p class="sub__header">IPLM</p>
            <h2>Ayo Membaca !<br>
            Ayo ke Perpustakaan !</h2>
            <p class="section__subtitle">Suatu website yang dikembangkan untuk mempermudah perhitungan Pengukuran Indeks Pembangunan Literasi Masyarakat (IPLM) agar lebih mudah dan menyenangkan.</p>
            <div class="action__btns">
              <a href="#category"><button class="btn">Mulai hitung</button></a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Awal Hitung UPLM -->
    <section class="category" id="category">
      <div class="section__container category__container">
        <img src="assets/bg-png.png" alt="bg" class="category__bg" />
        <h2 class="section__headerr">Unsur Pembangun <span>Literasi</span> Masyarakat</h2>
        <p class="section__descriptionn">IPLM mengukur kondisi perpustakaan di seluruh Indonesia, termasuk sebaran, koleksi, tenaga perpustakaan, dan pemustaka.</p>
        <div class="category__flex">
          <div class="category__card">
            <a href="form/uplm1.php"><img src="assets/uplm1.png" alt="category" /></a>
            <h4>UPLM1</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm2.php"><img src="assets/uplm2.png" alt="category" /></a>
            <h4>UPLM2</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm3.php"><img src="assets/uplm3.png" alt="category" /></a>
            <h4>UPLM3</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm4.php"><img src="assets/uplm4.png" alt="category" /></a>
            <h4>UPLM4</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm5.php"><img src="assets/uplm5.png" alt="category" /></a>
            <h4>UPLM5</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm6.php"><img src="assets/uplm6.png" alt="category" /></a>
            <h4>UPLM6</h4>
          </div>
          <div class="category__card">
            <a href="form/uplm7.php"><img src="assets/uplm7.png" alt="category" /></a>
            <h4>UPLM7</h4>
          </div>
          <div class="category__card">
            <a href="form/iplm.php"><img src="assets/iplm.png" alt="category" /></a>
            <h4>IPLM</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hitung UPLM -->

    <!-- Awal Lokasi -->
    <section class="section__container travel__container" id="lokasi">
      <div class="travel__image">
        <img src="assets/dinas.jpg" alt="travel" />
      </div>
      <div class="travel__content">
        <h2 class="section__header">Perpustakaan<br />Daerah Bojonegoro</h2>
        <p class="section__description">Perpustakaan Bojonegoro merupakan pusat pengetahuan yang menyediakan beragam koleksi bacaan dan layanan informatif. Tempat ini menjadi sumber inspirasi dan pembelajaran bagi masyarakat Bojonegoro.</p>
        <a href="https://maps.app.goo.gl/gQCqPweWMc6W19vx5" target="_blank">
          <button class="btn" id="lokasi">Lokasi</button>
        </a>
        <a href="#lokasi"><img src="assets/lok.png" alt="map"  width="100%"/></a>
      </div>
    </section>
    <!-- End Lokasi -->

    <!-- Awal Koleksi -->
    <section class="section__container explore__container" id="koleksi">
      <div class="explore__content">
        <h2 class="section__header">Jelajahi Koleksi<br />Buku Menarik</h2>
      </div>
      <div class="explore__wrapper">
        <div class="explore__wrapper-inner">
          <img src="assets/buku1.png" alt="explore" />
          <img src="assets/buku2.jpg" alt="explore" />
          <img src="assets/buku3.jpg" alt="explore" />
          <img src="assets/buku4.jpeg" alt="explore" />
        </div>
      </div>
    </section>
    <!-- End Koleksi -->

    <!-- Awal Team -->
    <section class="gallary" id="team">
      <div class="section__container gallary__container">
        <div class="image__gallary">
          <div class="gallary__col">
            <img src="assets/perpus_kita.jpg" alt="gallary" />
          </div>
          <div class="gallary__col">
            <img src="assets/perpus_alun.jpg" alt="gallary" />
            <img src="assets/perpus2.jpg" alt="gallary" />
          </div>
        </div>
        <div class="gallary__content">
          <div>
            <h2 class="section__title">Team Pengembang website ini</h2>
            <p class="section__subtitle" style="text-align: justify">
              Website perhitungan IPLM ini dikembangkan oleh tim yang terdiri dari Dohan, Oki, dan Dina, dengan tujuan memberikan akses mudah dan akurat untuk mengukur Indeks Pembangunan Literasi Masyarakat.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team  -->

    <footer class="footer">
      <div class="footer__bar">Copyright © 2024 Dinas Perpustakaan dan Kearsipan Kabupaten Bojonegoro.</div>
    </footer>
  </body>
</html>
