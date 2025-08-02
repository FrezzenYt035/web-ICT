<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail SIKEAMS</title>
  <link rel="icon" type="image/png" href="img/logo_umtas.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #f4f4f4;
    }
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #000b4f;
      color: yellow;
      padding: 10px 20px;
      position: relative;
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
      text-decoration: none;
      color: yellow;
      font-weight: bold;
    }
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
      background-image: url('/img/umtas.jpg');
      background-size: cover;
      background-position: center;
      height: 600px;
      position: relative;
      overflow: hidden;
    }
    .hero-overlay {
      background-color: rgba(0, 0, 0, 0.5);
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
    .help-section {
      text-align: center;
      padding: 40px 0px;
      background: linear-gradient(to bottom, #e0e6ff, #4d73ff);
      border-radius: 0px;
      margin: 40px auto;
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
    .tentang-kami {
      display: flex;
      justify-content: center;
      margin-top: -30px;
      margin-bottom: 80px;
    }
    .tentang-box {
      background-color: white;
      padding: 40px;
      border-radius: 20px;
      width: 80%;
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
    .container {
      display: flex;
      padding: 20px;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }
    .left-column {
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .main-image {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      height: auto;
    }
    .thumbnail-list {
      margin-top: 15px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }
    .thumbnail-list img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 4px;
      border: 2px solid #ccc;
    }
    .right-column {
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .price {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }
    .video-preview img {
      width: 100%;
      border-radius: 6px;
      margin-bottom: 20px;
    }
    .description {
      background-color: #fff;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }
    .description strong {
      color: #000;
    }
    /* Responsive for main content */
    @media (max-width: 900px) {
      .container {
        flex-direction: column;
        gap: 20px;
        padding: 10px;
      }
      .left-column, .right-column {
        width: 100%;
      }
      .main-image {
        max-width: 100%;
        height: auto;
      }
    }
    @media (max-width: 600px) {
      .container {
        padding: 5px;
      }
      .tentang-box {
        padding: 20px;
        width: 98%;
      }
      .hero-text h1 {
        font-size: 28px;
      }
      .hero-text p {
        font-size: 16px;
      }
    }
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
    &#9776;
  </button>
  <nav class="nav-links" id="navLinks">
  <a href="beranda">Beranda</a>
  <a href="tentang">Tentang Kami</a>
  <a href="project">Project ICT</a>
  <a href="informasi">Informasi</a>
  <a href="daftar">Daftar Website</a>
  <a href="team">Team</a>
  <a href="admin">Admin</a>
  </nav>
</header>

<main class="container">
  <div class="left-column">
  <img src="img/sikemas.png" alt="RPG Class Boss Assassin" class="main-image">
  </div>
  <div class="right-column">
  <h1>Sistem Informasi Kemahasiswaan</h1>
  <a href="https://sikemas.umtas.ac.id/auth/login" target="_blank">sikemas.umtas.ac.id/</a>
  <p>Sistem Informasi Kemahasiswaan adalah platform yang digunakan universitas untuk mengelola berbagai aspek terkait mahasiswa. Sistem ini biasanya terintegrasi dengan sistem akademik dan bertujuan untuk mempermudah administrasi serta pelayanan mahasiswa.</p>
  <div class="description">
    <p><h3>Detail</h3></p>
    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Gravida habitasse tincidunt convallis duis ex phasellus erat faucibus. ...</p>
  </div>
  </div>
</main>
<script>
  // Responsive navbar toggle
  document.getElementById('menuToggle').onclick = function() {
  var nav = document.getElementById('navLinks');
  nav.classList.toggle('active');
  };
</script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
