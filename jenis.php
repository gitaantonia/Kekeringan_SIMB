<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis-jenis Kekeringan - KALOLA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Montaga", serif;
            background: rgba(101, 12, 12, 0.39);
            background-size: cover;
            min-height: 100vh;
            letter-spacing: 0.5px;
        }

        /* Navigation */
        nav {
            display: flex;
            align-items: center;
            padding: 20px 40px;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        

        .logo {
            display: flex;
            align-items: center;
            margin-right: auto;
        }

        .logo img {
            height: 40px;
            width: 40px;
            margin-right: 10px;
            border-radius: 50%;
            background: transparent;
        }

        .logo span {
            font-size: 20px;
            letter-spacing: 2px;
            color: white;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin: 0 auto;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            padding: 10px 15px;
            display: block;
            transition: 0.3s;
            border-radius: 6px;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Hero Section dengan Grid 2 Kolom */
        .hero-section {
            max-width: 1400px;
            margin: 80px auto 60px;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        /* Kolom Kiri - Text Content */
        .hero-left {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .hero-title-box {
            padding: 15px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-title {
            font-size: 3rem;
            color: white;
            font-weight: normal;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.2;
            text-align: center;
        }

        .hero-title span {
            display: block;
            font-size: 2rem;
            margin-top: 5px;
        }

        .hero-description-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            height: 250px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-description {
            font-size: 1rem;
            line-height: 1.4;
            text-align: justify;
            color: white;
            overflow: hidden;
        }

        /* Kolom Kanan - Gambar Kecil */
        .hero-right {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image {
            width: 400px;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            background: linear-gradient(135deg, #000000ff 0%, #790202ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin: 0 auto;
        }

        .hero-image::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255, 255, 255, 0.05) 10px,
                rgba(255, 255, 255, 0.05) 20px
            );
            animation: slide 30s linear infinite;
        }

        @keyframes slide {
            0% { transform: translate(-50%, -50%); }
            100% { transform: translate(0, 0); }
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 1;
        }

        .hero-icon {
            font-size: 3rem;
            z-index: 1;
            filter: drop-shadow(2px 2px 8px rgba(0, 0, 0, 0.5));
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-section {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .hero-image {
                width: 80px;
                height: 80px;
            }

            .hero-icon {
                font-size: 2.5rem;
            }

            .hero-title {
                font-size: 3rem;
            }

            .hero-title span {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-section {
                margin: 40px auto 40px;
                padding: 0 20px;
            }

            .hero-title-box,
            .hero-description-box {
                height: 300px;
                padding: 15px;
            }

            .hero-title {
                font-size: 1.2rem;
            }

            .hero-title span {
                font-size: 1.5rem;
            }

            .hero-description {
                font-size: 1rem;
                -webkit-line-clamp: 8;
            }

            .hero-image {
                width: 70px;
                height: 70px;
            }

            .hero-icon {
                font-size: 2rem;
            }
        }

        /* Cards Container */
        .cards-container {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 40px 80px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        /* Card Styling */
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .card-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #000000ff 0%, #790202ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .card-image::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255, 255, 255, 0.1) 10px,
                rgba(255, 255, 255, 0.1) 20px
            );
            animation: slide 20s linear infinite;
        }

        .card-icon {
            font-size: 4rem;
            color: white;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
            font-weight: bold;
        }

        .card-button {
            margin-top: auto;
            padding: 12px 24px;
            background: linear-gradient(135deg, #7d0000ff 0%, #000000ff 100%);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-family: "Montaga", serif;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(47, 48, 54, 0.4);
        }

        .card-button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(137, 152, 218, 0.6);
        }

        @media (max-width: 768px) {
            .cards-container {
                padding: 0 20px 60px;
                gap: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">
            <img src="../Kekeringan_SIMB/assets/img/logo.png" alt="Logo KALOLA">
            <span>KALOLA</span>
        </div>
        <ul>
            <li><a href="#peta">Peta</a></li>
            <li><a href="#artikel">Artikel</a></li>
            <li><a href="#penyebab">Penyebab</a></li>
            <li><a href="#donasi">Donasi</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#kontak">Kontak Darurat</a></li>
        </ul>
    </nav>

    <!-- Hero Section dengan 2 Kolom -->
    <section class="hero-section">
        <!-- Kolom Kiri: Judul & Deskripsi -->
        <div class="hero-left">
            <div class="hero-title-box">
                <h1 class="hero-title">
                    Jenis – jenis Kekeringan
                </h1>
            </div>
            
            <div class="hero-description-box">
                <p class="hero-description">
                    Kekeringan dapat dibedakan menjadi empat jenis. Kekeringan meteorologis terjadi ketika curah hujan di suatu wilayah jauh lebih sedikit dari biasanya dalam waktu yang lama. Kekeringan hidrologis muncul ketika persediaan air di sungai, danau, waduk, atau air tanah menurun akibat kurangnya hujan. Kekeringan pertanian terjadi saat tanah kekurangan air sehingga tanaman tidak dapat tumbuh dengan baik. Terakhir itu, kekeringan sosial ekonomi terjadi ketika kekurangan air mulai memengaruhi kehidupan masyarakat, seperti kegiatan pertanian, industri, dan kebutuhan sehari-hari.
                </p>
            </div>
        </div>

        <!-- Kolom Kanan: Gambar Besar (Merge 2 Baris) -->
        <div class="hero-right">
            <div class="hero-image">
                <!-- Ganti dengan gambar real -->
                <img src="../Kekeringan_SIMB/assets/img/kering.jpeg" alt="Ilustrasi Kekeringan">
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <div class="cards-container">
        <!-- Card 1 -->
        <div class="card">
            <div class="card-image">
                <div class="card-icon">☁️</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Kekeringan Meteorologis</h3>
                <button class="card-button">Pelajari Selengkapnya</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <div class="card-image">
                <div class="card-icon">💧</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Kekeringan Hidrologis</h3>
                <button class="card-button">Pelajari Selengkapnya</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <div class="card-image">
                <div class="card-icon">🌾</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Kekeringan Pertanian</h3>
                <button class="card-button">Pelajari Selengkapnya</button>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <div class="card-image">
                <div class="card-icon">🏘️</div>
            </div>
            <div class="card-content">
                <h3 class="card-title">Kekeringan Sosial Ekonomi</h3>
                <button class="card-button">Pelajari Selengkapnya</button>
            </div>
        </div>
    </div>
</body>
</html>