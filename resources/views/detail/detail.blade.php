<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo_umtas.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Lengkap</title>
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

.text-center h2 {
    display: flex;
    justify-content: center;
    align-content: center;
    padding: 20px 250px;
    font-size: 40px;
}

.text-center p {
    display: flex;
    justify-content: center;
    align-content: center;
    padding: 20px 250px;
}

.text-center img {
    display: flex;
    justify-content: center;
    align-content: center;
    padding: 20px 250px;
}
    </style>
</head>
<body>
    {{-- navbar --}}
    <header class="navbar">
  <div class="logo">
    <img src="{{ asset('img/logo_umtas.png') }}" alt="Logo">
        <div class="text">
      <strong>ICT dan Laboratorium UMTAS</strong>
    </div>
  </div>
   <button class="menu-toggle" id="menuToggle">
      &#9776; <!-- hamburger icon -->
    </button>
  <nav class="nav-links" id="navLinks">
    <div><a  href="/beranda">Beranda</a></div>

    <a  href="/tentang">Tentang Kami</a>
    <a  href="/project">Project ICT</a>
    <a  href="/informasi">Informasi</a>
    <a  href="/daftar">Daftar Website</a>
    <a  href="/team">Team</a>
    <a href="/login">Admin</a>
  </nav>
</header>

<div style="display: flex; flex-wrap: wrap; align-items: flex-start; gap: 20px; max-width: 1200px; margin: 0 auto; padding: 20px;">

    <!-- Kolom Kiri: Tanggal + Gambar -->
    <div style="flex: 0 0 auto; text-align: left;">
        <!-- Tanggal -->
        <p style="margin-bottom: 8px; font-size: 16px; color: #555;">
            <i class="fa-solid fa-calendar"></i>
            {{ \Carbon\Carbon::parse($informasi->created_at)->format('Y-m-d H:i') }}
        </p>
        <!-- Gambar -->
        <img src="{{ asset('uploads/' . $informasi->gambar) }}"
             alt="{{ $informasi->judul }}"
             style="width: 500px; height: 400px; object-fit: cover; background: #ddd;">
    </div>

    <!-- Kolom Kanan: Judul + Deskripsi -->
    <div style="flex: 1 1 0; min-width: 300px; margin-top: 36px;">
        <h1 style="margin: 0;">{{ $informasi->judul }}</h1>
        <p style="white-space: pre-line; text-align: justify; margin-top: 10px;">
            {{ $informasi->deskripsi }}
        </p>
    </div>
</div>





</body>
 <footer style="background-color: #000b4f; color: white; ">
  <div class="footer-bottom">
    <p>© 2025 ICT UMTAS All Rights Reserved.</p>
    <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
  </div>
  </footer>
  <script src="{{ asset('js/script.js') }}"></script>
</html>
