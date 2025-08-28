<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Scrollbar custom */
    .project-list::-webkit-scrollbar {
      height: 8px;
    }
    .project-list::-webkit-scrollbar-thumb {
      background-color: #a0aec0;
      border-radius: 10px;
    }
    .project-list::-webkit-scrollbar-track {
      background: #f7fafc;
    }

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
      font-weight: bold;
      text-decoration: none;
    }
    .nav-links a:hover {
      color: #fff;
    }

    /* Responsive menu */
    @media (max-width: 768px) {
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

    .footer-bottom {
      margin-top: 30px;
      background-color: #222;
      color: white;
      padding: 10px 0;
      text-align: center;
    }
  </style>
</head>
<body class="bg-white text-gray-900 font-sans min-h-screen flex flex-col">

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
      <img src="{{ asset('img/logo_umtas.png') }}" alt="Logo">
      <div class="text">
        <strong>ICT dan Laboratorium UMTAS</strong>
      </div>
    </div>
    <button class="menu-toggle" id="menuToggle">&#9776;</button>
    <nav class="nav-links" id="navLinks">
      <a href="/beranda">Beranda</a>
      <a href="/tentang">Tentang Kami</a>
      <a href="/project">Project ICT</a>
      <a href="/informasi">Informasi</a>
      <a href="/daftar">Daftar Website</a>
      <a href="/team">Team</a>
      <a href="/login">Admin</a>
    </nav>
  </header>

  <!-- Profil Section -->
  <main class="flex-grow container mx-auto px-6 md:px-12 py-8">
    <section class="bg-white shadow-lg rounded-2xl p-6 md:p-10 flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-16 border border-gray-200">

      <!-- Foto Profil -->
      <div class="flex-shrink-0">
        <div class="rounded-full bg-gray-300 overflow-hidden w-48 h-48 md:w-56 md:h-56">
          <!-- contoh gambar profil -->
          <img src="{{ url('uploads/' . $team->image) }}" alt="Foto Profil" class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Info Profil -->
      <div class="flex-1 text-center md:text-left">
        <h1 class="text-2xl md:text-3xl font-semibold mb-3">{{ $team->name }}</h1>
        <p class="text-gray-600 text-base md:text-lg">Jabatan: <span class="font-medium">{{ $team->position }}</span></p>
        <p class="text-gray-600 text-base md:text-lg">Telepon: <span class="font-medium">{{ $team->{'no_WA'} }}</span></p>
        <hr class="my-4 border-gray-300">
        <p class="text-gray-700 text-base md:text-lg leading-relaxed">{{ $team->bio }}</p>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer style="background-color: #000b4f;">
    <div class="footer-bottom">
      <p>© 2025 ICT UMTAS All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    // Toggle menu responsive
    document.getElementById("menuToggle").addEventListener("click", function () {
      document.getElementById("navLinks").classList.toggle("active");
    });
  </script>
</body>
</html>
