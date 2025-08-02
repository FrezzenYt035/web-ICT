<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Website</title>
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
  z-index: 1000;  flex-wrap: wrap;
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
  text-decoration: none;
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
/* Section bantuan */
.help-section {
  text-align: center;
  padding: 40px 0px;
  background: linear-gradient(to bottom, #e0e6ff, #4d73ff); /* gradasi biru */
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


h2 {
    margin-bottom: 20px;
}

label, input {
    margin: 5px 10px 5px 0;
    font-size: 14px;
}

input[type="number"],
input[type="text"] {
    padding: 4px 8px;
    font-size: 14px;
    width: 80px;
    box-sizing: border-box;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    font-size: 14px;
}

thead {
    background-color: #e6f2f8;
}

th, td {
    padding: 10px 12px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    font-weight: bold;
}

tbody tr:hover {
    background-color: #f9f9f9;
}

a {
    color: #0077cc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.pagination {
    margin-top: 15px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 14px;
}

.pagination button {
    margin: 0 2px;
    padding: 6px 12px;
    background-color: white;
    border: 1px solid #ccc;
    cursor: pointer;
    border-radius: 4px;
}

.pagination button.active {
    background-color: #0077cc;
    color: white;
    border-color: #0077cc;
}

.pagination button:disabled {
    color: #aaa;
    cursor: default;
}

.top {
  padding: 50px;
}

.site-footer {
    background-color: #0b1723; /* Warna gelap seperti gambar */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    font-size: 16px;
    flex-wrap: wrap;
}

.site-footer .footer-right a {
    color: #fff;
    text-decoration: none;
    margin-left: 20px;
    transition: color 0.3s ease;
}

.site-footer .footer-right a:hover {
    color: #c0c0c0;
}

@media screen and (max-width: 768px) {
    .site-footer {
        flex-direction: column;
        text-align: center;
    }

    .footer-right {
        margin-top: 10px;
    }

    .footer-right a {
        display: inline-block;
        margin: 5px 10px;
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

#searchInput {
  margin-bottom: 10px;
  padding: 6px 10px;
  width: 200px;
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
  <div class="top">
    <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
    <input type="text" id="searchInput" placeholder="Cari...">
  <table id="myTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Website</th>
                <th>URL</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
       @foreach ($data as $index => $website)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $website->name }}</td>
                <td>{{ $website->url }}</td>
                <td>{{ $website->type }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- <div class="pagination">
        <button disabled>&lt;</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>&gt;</button>
    </div> --}}
</div>
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
  </div>
  <div class="footer-bottom">
    <p>© 2025 ICT UMTAS All Rights Reserved.</p>
    <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
  </div>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

{{-- --- Search Bar --- --}}
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#myTable tbody tr');

    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>
