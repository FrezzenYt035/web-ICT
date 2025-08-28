<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/png" href="{{ asset('img/logo_umtas.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project ICT UMTAS</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <style>
    body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
        }

main {
  text-align: center;
  padding: 40px 20px;
}

h1 {
  font-size: 24px;
  margin-bottom: 30px;
  font-weight: bold;
}

.project-grid {
  display: inline-block;
  padding: 15px;
  justify-content: center;
  gap: 25px;
}

.card {
  background-color: white;
  width: 400px;
  border: 1px solid #000;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
}

.card img {
  width: 100%;
  height: 250px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
  text-align: left;
}

.card h3 {
  font-size: 18px;
  margin-bottom: 5px;
}

.card a {
  color: #007bff;
  text-decoration: none;
  font-size: 14px;
  display: block;
  margin-bottom: 10px;
}

.card p {
  font-size: 14px;
  color: #333;
  margin-bottom: 15px;
}

.card button {
  background-color: #0d0d6d;
  color: white;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
  font-size: 14px;
  border-radius: 4px;
  width: 30%;
  height: 40px;
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

  .judul-container {
  display: flex;
  justify-content: center;
  padding-left: 100px;
}

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
    <a href="{{ url('beranda') }}">Beranda</a>
    <a href="{{ url('tentang') }}">Tentang Kami</a>
    <a href="{{ url('project') }}">Project ICT</a>
    <a href="{{ url('informasi') }}">Informasi</a>
    <a href="{{ url('daftar') }}">Daftar Website</a>
    <a href="{{ url('team') }}">Team</a>
    <a href="{{ url('login') }}">Admin</a>
  </nav>
</header>
<br>
  <main>
       {{-- title --}}
    <h1>Project ICT UMTAS</h1>
    @foreach ($projects as $index => $project)
        <div class="project-grid">
            <div class="card" data-index="{{ $index }}">
                <img src="{{ url('uploads/'.$project->image) }}" alt="{{ $project->judul }}">
                 <div class="card-content">
                    <h3 class="judul">{{ $project->name }}</h3>
                        <p class="link">
                            <i class="fa fa-link"></i>
                             <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
                        </p>
                    <p class="truncate-3">{{ $project->description }}</p>
                     <button onclick="window.location.href='{{ route('project.show', $project->slug) }}'">Detail</button>
                </div>
            </div>
        </div>
    @endforeach
    </div>
  </main>
        {{-- footer --}}
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
    <p>© 2025 ICT UMTAS All Rights Reserved.</p>
    <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
  </div>
</footer>
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
