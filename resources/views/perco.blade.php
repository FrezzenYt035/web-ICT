<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner Slider</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0; padding: 0;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .banner {
      position: relative;
      width: 100%;
      height: 80vh;
      overflow: hidden;
    }

    .slide {
      position: absolute;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 0.7s ease-in-out;
    }

    .slide.active {
      opacity: 1;
    }

    .caption {
      position: absolute;
      bottom: 20%;
      left: 10%;
      color: white;
      background: rgba(0, 0, 0, 0.4);
      padding: 20px;
      border-radius: 10px;
      max-width: 500px;
    }

    .caption h1 {
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .buttons {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
      padding: 0 20px;
    }

    .buttons button {
      background: rgba(255, 255, 255, 0.7);
      border: none;
      padding: 10px 15px;
      font-size: 18px;
      cursor: pointer;
      border-radius: 50%;
      transition: background 0.3s;
    }

    .buttons button:hover {
      background: rgba(255, 255, 255, 1);
    }

    @media (max-width: 768px) {
      .caption {
        bottom: 15%;
        left: 5%;
        padding: 15px;
      }

      .caption h1 {
        font-size: 1.5rem;
      }

      .buttons button {
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body>

  <div class="banner" id="bannerSlider">
    <div class="slide active" style="background-image: url('banner1.jpg');">
      <div class="caption">
        <h1>Selamat Datang di UMTAS</h1>
        <p>Universitas Muhammadiyah Tasikmalaya</p>
      </div>
    </div>
    <div class="slide" style="background-image: url('banner2.jpg');">
      <div class="caption">
        <h1>Fakultas dan Program Studi</h1>
        <p>Beragam program unggulan</p>
      </div>
    </div>
    <div class="slide" style="background-image: url('img/gambar_umtas.png');">
      <div class="caption">
        <h1>Kampus Islami</h1>
        <p>Berbasis nilai-nilai Muhammadiyah</p>
      </div>
    </div>

    <div class="buttons">
      <button onclick="prevSlide()">❮</button>
      <button onclick="nextSlide()">❯</button>
    </div>
  </div>

  <script>
    let slides = document.querySelectorAll('.slide');
    let current = 0;

    function showSlide(index) {
      slides.forEach(slide => slide.classList.remove('active'));
      slides[index].classList.add('active');
    }

    function nextSlide() {
      current = (current + 1) % slides.length;
      showSlide(current);
    }

    function prevSlide() {
      current = (current - 1 + slides.length) % slides.length;
      showSlide(current);
    }

    // Optional: Auto Slide
    setInterval(nextSlide, 5000);
  </script>

</body>
</html>
