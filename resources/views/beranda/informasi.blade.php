<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi ICT UMTAS</title>
    <link rel="stylesheet" href="style.css">
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
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

        .hero-banner {
    background-image: url('/img/umtas.jpg'); /* Ganti path gambar sesuai lokasi kamu */
    background-size: cover;
    background-position: center;
    height: 600px;
    position: relative;
    overflow: hidden;
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

main {
    padding: 30px 50px;
    text-align: center;
}

h1 {
    font-size: 32px;
    margin-bottom: 30px;
    font-weight: bold;
}
  /* <!-- card css --> */
.card-container {
    display: flex;
    grid-template-columns: repeat(auto-fit, minmax(28px, 1fr));
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    background: #fff;
    width: 300px;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    text-align: left;
    display: block;
}
@media (max-width: 768px) {
    .card-container {
        flex: 1 1 calc(50% - 20px);
        max-width: calc(50% - 20px);
    }
}
@media (max-width: 480px) {
    .card-container {
        flex: 1 1 100%;
        max-width: 100%;
    }
}


.card img {
    width: 100%;
    height: 200px;
    display: block;
    border-radius: 5px;
    margin-bottom: 10px;
    object-fit: cover;
}

.card h3 {
    font-size: 16px;
    margin-bottom: 5px;
}

.card a {
    font-size: 14px;
    color: #007bff;
    text-decoration: none;
}

.card p {
    font-size: 13px;
    margin: 5px 0 10px;
}

.card button {
    background-color: #0d0d6d;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
}
/* <!-- footer css --> */
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
  color: #cccccc;
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
/* {{-- --- Navbar --- --}} */
    </style>
</head>
<body>
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
    <a href="beranda">Beranda</a>
    <a href="tentang">Tentang Kami</a>
    <a href="project">Project ICT</a>
    <a href="informasi">Informasi</a>
    <a href="daftar">Daftar Website</a>
    <a href="team">Team</a>
    <a href="login">Admin</a>
  </nav>
</header>
{{-- ---- Card Image --- --}}
    <main>
        <h1>Informasi ICT UMTAS</h1>
        <div class="card-list fade-in" id="cardList">
  @foreach ($informasi as $index => $info)
    <div class="card" data-index="{{ $index }}">
      <img src="{{ url('uploads/'.$info->gambar) }}" alt="{{ $info->judul }}" />
      <div class="card-content">
        <p class="date">
          <i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($info->tanggal)->format('d F Y') }}
        </p>
        <h3 class="judul">{{ $info->judul }}</h3>
        <p class="truncate-3">{{ $info->deskripsi }}</p>
        <a href="{{ url('informasi/' . $info->slug) }}" class="read-more">Selengkapnya</a>
      </div>
    </div>
  @endforeach
</div>
    </main>
{{-- --- footer --- --}}
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
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
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
    <p>© 2025   ICT UMTAS All Rights Reserved.</p>
    <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
  </div>
</footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
