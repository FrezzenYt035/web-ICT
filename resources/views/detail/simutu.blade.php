<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail SIMUTU</title>
    <link rel="icon" type="image/png" href="img/logo_umtas.png">
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

.container {
  display: flex;
  padding: 20px;
  gap: 40px;
}

.left-column {
  width: 50%;
}

.main-image {
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
    <a href="admin">Admin</a>
  </nav>
</header>

  <main class="container">
    <div class="left-column">
      <img src="img/simutu.png" alt="RPG Class Boss Assassin" class="main-image">
    </div>

    <div class="right-column">
      <h1>Sistem Informasi Penjaminan Mutu</h1>
      <a href="https://sso.umtas.ac.id/?redirect=https%3A%2F%2Fsimutu.umtas.ac.id&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzc28tdW10YXMiLCJzdWIiOnsiY2FsbGJhY2tfdXJsIjoiaHR0cHM6Ly9zaW11dHUudW10YXMuYWMuaWQvbG9naW4ifSwiaWF0IjoxNzUyMjgzODQxLCJleHAiOjE3NTIyODc0NDF9.Q_10YVdSyMVwn3_3lQWOvOMFWjzRrA_UrlNPa1FVAx4" target="_blank">simutu.umtas.ac.id/</a>
      <p>Sistem Informasi Penjaminan Mutu (SIMUTU) adalah platform berbasis web yang digunakan untuk mendukung proses penjaminan mutu di perguruan tinggi. Tujuannya adalah memastikan bahwa standar akademik dan non-akademik di universitas sesuai dengan regulasi dan kebijakan mutu yang ditetapkan.</p>

      <div class="description">
        <p><h3>Detail</h3></p>
        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Gravida habitasse tincidunt convallis duis ex phasellus erat faucibus. Per habitasse ex purus rutrum etiam eleifend diam augue. Litora hendrerit consectetur natoque sed mi arcu accumsan taciti. Mattis iaculis ullamcorper mattis vulputate; vestibulum diam. Elit donec sociosqu sodales mi laoreet mi venenatis ligula. Sed facilisis leo mauris nulla conubia ridiculus. Luctus id nunc finibus venenatis efficitur accumsan curae fames in? Porta nisi congue cras curae ex mi. Praesent taciti lobortis orci ut per dictumst lorem. Cubilia cras netus dictum sollicitudin platea lacinia venenatis commodo praesent. Dictum facilisi quam dis etiam massa erat efficitur. Pulvinar vulputate tempus ultricies magna porta mollis. Sodales dictumst iaculis purus orci habitant. Dolor facilisi purus eget faucibus taciti elit adipiscing. Habitasse urna maximus ac tempor porttitor nunc et. Non leo torquent egestas torquent velit. Tempor porta rhoncus inceptos pharetra et felis. Vulputate luctus class mi auctor nisl mi nec sem. Afaucibus eget libero natoque eleifend sagittis. Risus libero sodales magnis nam placerat phasellus sodales. Consectetur convallis consequat lacinia dolor convallis dignissim metus. Sed sapien gravida morbi elementum consectetur dis class rutrum sodales. Per nascetur nisi placerat aliquam duis dictum eu. Integer sociosqu hac vel rutrum erat dolor velit. Venenatis porta lacinia ex dis diam neque condimentum lectus. Dis natoque fusce ante rhoncus semper. Ante elit turpis suspendisse neque inceptos tempor tincidunt. Mollis inceptos class ad congue himenaeos. Vestibulum gravida cras nibh eleifend aliquet in id habitasse. Fermentum dapibus cursus vivamus iaculis libero mi sodales. Dui condimentum eleifend curabitur; interdum bibendum tristique. Nisi ullamcorper auctor tempor venenatis risus convallis. Feugiat vel lectus aenean at tellus proin; maximus velit sodales. Molestie lorem turpis aenean lacus; nostra aptent hendrerit. Hac viverra duis lacinia penatibus libero mus. Vitae curabitur pulvinar imperdiet ullamcorper netus mollis rhoncus. Adipiscing dui suscipit fames pellentesque ornare consequat odio facilisis. Pulvinar feugiat ridiculus torquent condimentum taciti maecenas rutrum. Tristique justo justo potenti primis senectus ex vitae elit. Parturient nostra neque ullamcorper magna cubilia malesuada duis odio? Eget eu velit venenatis ex erat faucibus. Augue ligula erat ut quis ipsum tempor. Habitasse volutpat sed senectus himenaeos natoque. Aliquet facilisis praesent venenatis platea ad at. Fermentum ridiculus malesuada etiam sagittis curabitur? Posuere rhoncus velit; hac non molestie justo. Enim scelerisque ex dis metus nam venenatis duis et. Vel mauris sociosqu erat; velit netus facilisi dolor egestas. Sociosqu penatibus habitasse ligula varius arcu tincidunt lectus laoreet. Pellentesque hendrerit luctus ac pharetra ac duis mus montes. Integer montes per cras nec nisi sollicitudin. Sollicitudin nulla facilisis eget magna semper finibus nam! Egestas quam class nullam diam congue egestas ad ipsum tristique.</p>
      </div>
    </div>
  </main>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
