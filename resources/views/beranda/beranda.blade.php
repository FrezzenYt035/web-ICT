<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            overflow-x: hidden;
        }
        /* Navbar style */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #000b4f;
  color: yellow;
  padding: 10px 20px;
  position: sticky;
  top: 0;
  z-index: 1000;
  flex-wrap: wrap;
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  height: 40px;
  margin-right: 10px;
}

.logo .text {
  font-size: 16px;
  line-height: 1.2;
}

.menu-toggle {
  display: none;
  background: none;
  color: yellow;
  font-size: 24px;
  border: 1px solid yellow;
  border-radius: 5px;
  padding: 5px 10px;
  cursor: pointer;
}

.nav-links {
  display: flex;
  gap: 20px;
}
.nav-links a {
  color: yellow;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s, background-color 0.3s;
}

.nav-links a:hover {
  color: #ffffff;
}
/* Responsive */
@media (max-width: 768px) {
  .menu-toggle {
    display: block;
    flex-direction: column;
    background-color: #000066;
  }
  .nav-links.show {
    display: flex;
  }

  .menu-toggle {
    display: block;
  }

  .nav-links {
    display: none;
    flex-direction: column;
    width: 100%;
    margin-top: 10px;
  }

  .nav-links.active {
    display: flex;
  }

  .nav-links a {
    padding: 10px 0;
    border-top: 1px solid yellow;
  }
}
  .hero-title{
    position: relative;
    overflow: hidden;
  }

  .hero-banner {
    background-image: url('/img/umtas.jpg'); /* Ganti path gambar sesuai lokasi kamu */
    background-size: cover;
    background-position: center;
    height: 600px;
    position: relative;
{{--  --}}erflow: hidden;
    filter: brightness(70%); /* Menggelapkan gambar latar belakang */
}

.hero-overlay {
    background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0px;
}

.welcome {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0px;
}

.hero-text h1 {
    color: white;
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 20px;
}

.hero-text p {
    color: yellow;
    font-size: 20px;
    font-weight: bold;
}
/* Section bantuan */
.help-section {
  text-align: center;
  padding: 40px 0px;
  background: linear-gradient(to bottom, #e0e6ff, #4d73ff); /* gradasi biru */
  border-radius: 0px;
  margin: 0px auto 30px;
  width:100%;
  color: #333;
}

.help-section h2 {
  font-size: 22px;
  margin-bottom: 10px;
}

.help-section p {
  margin-bottom: 20px;
  font-size: 14px;
  color: #222;
}

.help-button {
  background-color: gold;
  color: #333;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 8px;
  text-decoration: none;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
  transition: background 0.3s;
}

.help-button:hover {
  background-color: #ffcc00;
}

/* Tentang Kami */
.tentang-kami {
  display: flex;
  justify-content: center;
  margin-top: -30px; /* sedikit naik ke atas */
  margin-bottom: 80px;
}

.tentang-box {
  background-color: white;
  padding: 40px;
  border-radius: 10px;
  width: 100%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.tentang-box h3 {
  font-weight: bold;
  margin-bottom: 15px;
}

.tentang-box p {
  color: #444;
  line-height: 1.8;
}

.clearfix {
    margin: 5px 0;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
}
/* footer css */
.footer-container {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  justify-content: space-around;
}

.footer-col {
  flex: 1;
  min-width: 250px;
}

.footer-col h3 {
  margin-bottom: 15px;
  color: #ffffff;
}

.footer-col p,
.footer-col li,
.footer-col a {
  color: #ffffff;
  font-size: 14px;
  line-height: 1.6;
  text-decoration: none;
}

.footer-col ul {
  list-style: none;
  padding-left: 0;
}

.footer-col li::before {
  content: "› ";
  color: yellow;
}

.social-icons a {
  display: inline-block;
  background: none;
  color: white;
  border: 1px solid #ccc;
  width: 30px;
  height: 30px;
  margin-right: 8px;
  text-align: center;
  line-height: 30px;
  font-size: 14px;
}

.footer-bottom {
  margin-top: 30px;
  background-color: #222;
  color: white;
  padding: 10px 0;
  text-align: center;
  position: relative;
}

.scroll-top {
  position: absolute;
  right: 20px;
  bottom: 10px;
  background-color: #d4af00;
  color: white;
  border-radius: 50%;
  padding: 10px;
  text-decoration: none;
  width:1.2%;
}
 .my-button {
  background-color: #007BFF;
  color: white;
  border: none;
  gap: 10px;
  font-size: 16px;
  width: 8%;
  height: 40px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  align-items: center;
  justify-content: space-between;
  float: left;
  margin: 0 20px;
  position: absolute;
  left: 0;
  top: 1650px;
  text-decoration: none;
}

    .my-button:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }

    .my-button:active {
      transform: scale(0.95);
    }
.hero-banner .slides {
      display: flex;
      height: 100%;
      transition: transform 0.5s ease-in-out;
    }

    .hero-banner .slide {
      min-width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    /* Konten teks di dalam banner */


    /* Tombol navigasi */
    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.4);
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      z-index: 10;
      font-size: 20px;
      border-radius: 5px;
    }

    .nav-button:hover {
      background: rgba(0, 0, 0, 0.7);
    }

    .prev {
      left: 20px;
    }

    .next {
      right: 20px;
    }

    @media screen and (max-width: 768px) {
      .slide-content h1 {
        font-size: 28px;
      }
      .slide-content p {
        font-size: 16px;
      }
      .my-button{
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translateX(20px);
      }
    }
    .swiper-buttons .swiper-button-prev,
    .swiper-buttons .swiper-button-next {
      color: #f2c100;
      font-size: 20px;
}
.teks-utama {
  font-size: 36px;
  font-weight: bold;
  color: white;
  margin-bottom: 10px;
  z-index: 2;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.teks-sub {
  font-size: 18px;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: yellow;
  z-index: 1;
}

.text-overlay h1{
    font-size: 48px;
    font-weight: bold;
}
.text-overlay  {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 10;
}
.nav-button:hover{
    background-color: white;
    color: yellow;
    transition: transform 0.3s ease;
}


.gallery {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding: 40px 620px;
}

.buttons {
  margin-top: 20px;
  text-align: center;
}

.buttons button {
  background: #333;
  color: white;
  border: none;
  padding: 10px 18px;
  margin: 0 10px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.buttons .next {
  background: #4CAF50;
}

.buttons button:hover {
  background: #555;
}


 @media (max-width: 480px) {
      .gallery {
        padding: 20px 300px;
      }
      .my-button{
        width: 20%;
        position: relative;
        top: 0;
        left: 0;
        margin: -40px auto;
      }
    }

    .fade-in {
  opacity: 0;
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.fade-in.show {
  opacity: 1;
  transform: translateY(0);
}
    </style>

    {{-- --- Banner CSS --- --}}
<style>
.slider {
  position: relative;
  width: 100%;
  height: 80vh;
  overflow: hidden;
}

.slide {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition: opacity 0.5s ease;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.slide.active {
  opacity: 1;
  z-index: 1;
}

.content-card {
  padding: 40px 80px;
  max-width: 800px;
  color: white;
  backdrop-filter: blur(4px);
  min-height: 100%;
  min-width: 60%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-bottom-right-radius: 40%;
  background: rgba(0, 0, 50, 0.7);
  animation: fadeIn1 0.8s ease-out;
}
/* Sembunyikan semua slide */
.slider .slide {
  display: none;
  position: absolute;
}

/* Slide aktif */
.slider .slide.active {
  display: block;
  position: relative;
}

/* Reset animasi */
.content-card-anim .date,
.content-card-anim .title {
  opacity: 1;
}

/* Animasi dari kiri */
.animate-left .content-card-anim .date {
  animation: slideInLeft 0.6s forwards;
}
.animate-left .content-card-anim .title {
  animation: slideInRight 0.6s forwards;
}

/* Animasi dari kanan */
.animate-right .content-card-anim .date {
  animation: slideInLeft 0.6s forwards;
}
.animate-right .content-card-anim .title {
  animation: slideInRight 0.6s forwards;
}

/* Keyframes */
@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}


.date {
  font-size: 18px;
  color: #ccc;
  animation: fadeIn1 0.8s ease-out;
}

.title {
  font-size: 54px;
  line-height: 1.3;
  animation: fadeIn 0.8s ease-out;
}

.button {
  background: white;
  color: #333;
  padding: 12px 24px;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  width: fit-content;
  transition: 0.3s;
}

.button:hover {
  background: #ddd;
}

.nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.3);
  color: white;
  font-size: 24px;
  padding: 12px;
  cursor: pointer;
  border: none;
  border-radius: 10px;
  z-index: 10;
}

.prev { left: 20px; }
.next { right: 20px; }

@media (max-width: 768px) {
  .content-card {
    margin-left: 20px;
    margin-right: 20px;
    padding: 20px;
    max-width: 90%;
  }

  .title {
    font-size: 24px;
  }

  .button {
    padding: 10px 20px;
    font-size: 14px;
  }
}
/* <-- CSS Button Banner --> */
.DetailButtonBanner {
  padding: 15px;
  display: flex;
  justify-content: center;
  color: rgb(24, 0, 110);
  background-color: #ffffff;
  width: 15%;
  border-radius: 10px;
  text-decoration: none;
  transition: color 0.3s, background-color 0.3s;
  animation: fadeInOpcty 0.8s ease-out;
}
.DetailButtonBanner:hover {
  background-color: rgb(24, 0, 110);
  color: white;
}
.slider .title {
  animation: fadeIn 0.8s ease-out;
}
.slider .date {
  animation: fadeIn1 0.8s ease-out;
}

/* <- Keyframe -> */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
@keyframes fadeIn1 {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
@keyframes fadeInOpcty {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.truncate-3 {
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* <- Card Informasi -> */
.card-list {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  padding: 20px;
}

.card {
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  width: 350px;
  overflow: hidden;
  transition: transform 0.3s;
  border-bottom: 5px solid rgb(255, 251, 0);
}

.card:hover {
  transform: translateY(-5px);
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
}

.card-content .date {
  color: #888;
  font-size: 14px;
  margin-bottom: 8px;
}

.card-content .judul {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 8px;
  color: #333;
}

.card-content .truncate-3 {
  color: #555;
  font-size: 15px;
  line-height: 1.4em;
  height: 4.2em; /* 1.4em * 3 lines */
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}

.read-more {
  display: inline-block;
  margin-top: 10px;
  color: #007BFF;
  font-weight: 600;
  text-decoration: none;
}

.more-info-btn-wrapper {
  text-align: center;
  margin-top: 30px;
  padding: 40px;
  border-radius: 20px;
}

.btn-more-info {
  background-color: yellow;
  color: black;
  font-weight: bold;
  padding: 15px 20px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  transition: background-color 0.3s;
}

.btn-more-info:hover {
  background-color: #ffd700;
  text-decoration: none;
}
</style>

</head>
<body>
{{-- --- Navbar --- --}}
<header class="navbar">
  <div class="logo">
    <img src="img/logo_umtas.png" alt="Logo">
    <div class="text">
      <strong>ICT dan Laboratorium UMTAS</strong>
    </div>
  </div>
   <button class="menu-toggle" id="menuToggle">
      &#9776; <!-- hamburger icon -->
    </button>
  <nav class="nav-links" id="navLinks">
    <div><a  href="beranda">Beranda</a></div>

    <a  href="tentang">Tentang Kami</a>
    <a  href="project">Project ICT</a>
    <a  href="informasi">Informasi</a>
    <a  href="daftar">Daftar Website</a>
    <a  href="team">Team</a>
    <a href="login">Admin</a>
  </nav>
</header>

{{-- --- Banner Slider --- --}}
 <section class="slider">
  @foreach ($informasi->take(6) as $index => $info)
    <div class="slide {{ $index === 0 ? 'active' : '' }}" style="background-image: url('{{ asset('uploads/' . $info->gambar) }}')">
      <div class="content-card">
        <div class="content-card-anim">
          <p class="date">{{ \Carbon\Carbon::parse($info->created_at)->format('Y-m-d H:i') }}</p>
          <h2 class="title">{{ $info->judul }}</h2>
            <a href="{{ route('informasi.show', $info->slug) }}" class="DetailButtonBanner">Selengkapnya</a>
        </div>
      </div>
    </div>
  @endforeach

  <button class="nav prev" onclick="prevSlide()">&#10094;</button>
  <button class="nav next" onclick="nextSlide()">&#10095;</button>
</section>

<!-- Section Bantuan ICT -->
<section class="help-section">
  <h2>Memerlukan bantuan bagian ICT UMTAS??</h2>
  <p>Silahkan untuk mengisi ticket di Helpdesk ICT UMTAS</p>
  <a href="#" class="help-button">Klik di sini</a>
</section>

<!-- Section Tentang Kami -->
@foreach($tentang_kami as $item)
<section class="tentang-kami">
  <div class="tentang-box">
    <h3>{{ $item->judul }}</h3>
    <p>
         {{ $item->deskripsi }}
    </p>
  </div>
</section>
@endforeach
<div class="clearfix fade-in">
    <h1>Berita Terbaru</h1>
</div>

{{-- ---- Card Image --- --}}
 <div class="card-list fade-in" id="cardList">
  @foreach ($informasi->take(6) as $index => $info)
    <div class="card" data-index="{{ $index }}">
      <img src="{{ url('uploads/'.$info->gambar) }}" alt="{{ $info->judul }}" />
      <div class="card-content">
        <p class="date">
          <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($info->tanggal)->format('d F Y') }}
        </p>
        <h3 class="judul">{{ $info->judul }}</h3>
        <p class="truncate-3">{{ $info->deskripsi }}</p>
        <a href="{{ url('informasi/' . $info->id) }}" class="read-more">Selengkapnya</a>
      </div>
    </div>
  @endforeach
</div>

<!-- Tombol "Informasi Lainnya" -->
<div class="more-info-btn-wrapper">
  <a href="{{ url('/informasi') }}" class="btn-more-info">
    Berita lainnya <i class="fa fa-arrow-right"></i>
  </a>
</div>


{{-- --- Footer --- --}}
<footer style="background-color: #000b4f; color: white; ">
  <div class="footer-container">
    <div class="footer-col" style="padding: 40px 20px;">
      <h3>Hubungi Kami</h3>
      <p>Lembaga Digitalisasi dan Teknologi Informasi Gedung G Lt 2<br>Jl. Tamansari No.KM 2<br> RW.5, Mulyasari, Kec. Tamansari, Kota. Tasikmalaya, Jawa Barat 46196</p>
      <p>+62 811-2484-300<br>pti@um-surabaya.ac.id<br>
        <a href="https://pti.um-surabaya.ac.id" target="_blank">https://pti.um-surabaya.ac.id</a></p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/umtas/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/@umtasik/featured"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h3>Lembaga/Biro/UPT</h3>
      <ul>
        <li>> <a href="https://sdm.umtas.ac.id/">Biro Administrasi dan SDM UMTAS</a></li>
        <li>> <a href="https://lppm.umtas.ac.id/">Lembaga Penelitian dan Pengabdian pada Masyarakat UMTAS</a></li>
        <li>> <a href="https://lpp.umtas.ac.id/">Lembaga Pengembangan Pendidikan UMTAS (LPP)</a></li>
        <li>> <a href="https://lpm.umtas.ac.id/">Badan Perencanaan dan Penjaminan MUTU</a></li>
        <li>> <a href="https://baa.umtas.ac.id/">Biro Administrasi Akademik</a></li>
        <li>> <a href="https://lpp.umtas.ac.id">Lembaga Pengembangan Pendidikan</a></li>
        <li>> <a href="https://pmb.umtas.ac.id">Penerimaan Mahasiswa Baru UMTAS</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Layanan Web</h3>
      <ul>
        <li>> <a href="https://repository.umtas.ac.id/">Repository UMTAS </a></li>
        <li>> <a href="https://opac.umtas.ac.id/">Perpustakaan UMTAS </a></li>
        <li>> <a href="https://journal.umtas.ac.id/">Journal UMTAS </a></li>
        <li>> <a href="https://kemahasiswaan.umtas.ac.id/">Kemahasiswaan UMTAS </a></li>
        <li>> <a href="https://konselingkarir.umtas.ac.id/">Konseling Karir UMTAS </a></li>
        <li>> <a href="https://satgasppks.umtas.ac.id">Satgas PPKS</a></li>
        <li>> <a href="https://sdlabschool.umtas.ac.id">SD Labschool</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 ICT UMTAS All Rights Reserved.</p>
    <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
  </div>
</footer>
<script src="{{ asset('js/script.js') }}"></script>


{{-- --- Button < > Banner --- --}}
{{-- <script>
  const slides = document.getElementById("heroSlides");
  const totalSlides = slides.children.length;
  let currentIndex = 0;

  function updateSlider() {
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function nextSlide() {
    if (currentIndex < totalSlides - 1) {
      currentIndex++;
      updateSlider();
    }
  }

  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  }
</script> --}}

{{-- ---Button < > Card--- --}}
{{-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    const cardList = document.getElementById('cardList');
    const cards = document.querySelectorAll('.card');
    let currentIndex = 0;

    function updateSlider() {
      const cardWidth = cards[0].offsetWidth + 30; // card width + gap
      const offset = currentIndex * cardWidth;
      cardList.style.transform = `translateX(-${offset}px)`;

      // Tambahkan efek aktif
      cards.forEach(card => card.classList.remove('active'));
      if (cards[currentIndex]) {
        cards[currentIndex].classList.add('active');
      }
    }

    window.prev = function () {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
      }
    }

    window.next = function () {
      if (currentIndex < cards.length - 1) {
        currentIndex++;
        updateSlider();
      }
    }

    updateSlider(); // Initial render
  });
</script> --}}

{{-- ---Fade In Animation--- --}}
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const fadeElems = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          observer.unobserve(entry.target); // agar hanya animasi sekali
        }
      });
    }, {
      threshold: 0.1
    });

    fadeElems.forEach(el => observer.observe(el));
  });
</script>

{{-- --- Banner --- --}}
<script>
  let slides = document.querySelectorAll('.slide');
  let current = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      if (i === index) slide.classList.add('active');
    });
  }



  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  function prevSlide() {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  }

  setInterval(nextSlide, 7000);

  showSlide(current);
</script>

<script>
  let slides = document.querySelectorAll('.slide');
  let current = 0;

  function showSlide(index, direction = 'right') {
    slides.forEach((slide, i) => {
      slide.classList.remove('active', 'animate-left', 'animate-right');

      if (i === index) {
        slide.classList.add('active');

        // Restart animation
        void slide.offsetWidth;

        slide.classList.add(direction === 'left' ? 'animate-left' : 'animate-right');
      }
    });
  }

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current, 'right');
  }

  function prevSlide() {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current, 'left');
  }

  // Munculkan animasi di awal
  showSlide(current, 'right');
</script>




</body>
</html>
