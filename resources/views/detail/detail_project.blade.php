<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/logo_umtas.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $Project->name }} - Project ICT</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            overflow-x: hidden;
        }

        /* Navbar */
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
            font-weight: bold;
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
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #fff;
        }

        /* Layout Project */
        .container {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 20px;
            gap: 30px;
            align-items: flex-start;
        }
        .left-column {
            flex: 1 1 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .left-column img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .right-column {
            flex: 1 1 400px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .right-column h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #000b4f;
        }
        .right-column a {
            display: inline-block;
            margin-bottom: 15px;
            color: #0066cc;
            text-decoration: none;
            font-weight: bold;
        }
        .right-column a:hover {
            text-decoration: underline;
        }
        .right-column p {
            line-height: 1.6;
            color: #333;
        }
        .description h3 {
            margin-top: 20px;
            color: #000b4f;
        }

        /* Footer */
        footer {
            background-color: #000b4f;
            color: white;
            text-align: center;
            padding: 15px 10px;
        }
        .scroll-top {
            display: inline-block;
            margin-left: 10px;
            color: yellow;
            font-size: 18px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                margin-top: 10px;
                background: #000b4f;
                padding: 10px;
            }
            .nav-links.active {
                display: flex;
            }
            .nav-links a {
                padding: 10px 0;
                border-top: 1px solid yellow;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo_umtas.png') }}" alt="Logo">
            <div class="text">ICT dan Laboratorium UMTAS</div>
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

    <!-- Isi Halaman -->
    <main class="container">
        <div class="left-column">
            <img src="{{ url('uploads/' . $Project->image) }}" alt="{{ $Project->name }}">
        </div>
        <div class="right-column">
            <h1>{{ $Project->name }}</h1>
            <a href="{{ $Project->link }}" target="_blank">{{ $Project->link }}</a>
            <p>{{ $Project->description }}</p>
            <div class="description">
                <h3>Detail</h3>
                <p>{{ $Project->detail }}</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2025 ICT UMTAS All Rights Reserved.
            <a href="#" class="scroll-top"><i class="fas fa-arrow-up"></i></a>
        </p>
    </footer>

    <script>
        const menuToggle = document.getElementById("menuToggle");
        const navLinks = document.getElementById("navLinks");
        menuToggle.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    </script>
</body>
</html>
