<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bencana Kekeringan - Informasi Lengkap</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <h1>Bencana Kekeringan: Penyebab, Dampak, dan Pencegahan</h1>
        <p>Situs edukasi untuk kesadaran tentang bencana kekeringan.</p>
    </header>

    <nav>
        <a href="#home">Beranda</a>
        <a href="#penyebab">Penyebab</a>
        <a href="#dampak">Dampak</a>
        <a href="#pencegahan">Pencegahan</a>
        <a href="#peta">Peta</a>
        <a href="#galeri">Galeri</a>
        <a href="#tips">Tips</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <section id="home">
        <h2>Beranda</h2>
        <p>Selamat datang di situs tentang bencana kekeringan. Jelajahi fitur-fitur untuk informasi lengkap.</p>
    </section>

    <section id="penyebab">
        <h2>Penyebab Kekeringan</h2>
        <p>Kekeringan disebabkan oleh:</p>
        <ul>
            <li>Perubahan iklim global.</li>
            <li>Deforestasi.</li>
            <li>Pengelolaan air buruk.</li>
        </ul>
    </section>

    <section id="dampak">
        <h2>Dampak Kekeringan</h2>
        <p>Dampak meliputi:</p>
        <ul>
            <li>Gagal panen dan kelaparan.</li>
            <li>Krisis air bersih.</li>
            <li>Migrasi dan konflik.</li>
        </ul>
    </section>

    <section id="pencegahan">
        <h2>Pencegahan dan Mitigasi</h2>
        <p>Langkah pencegahan:</p>
        <ul>
            <li>Konservasi air.</li>
            <li>Reboisasi.</li>
            <li>Pendidikan masyarakat.</li>
        </ul>
    </section>

    <section id="peta">
        <h2>Peta Daerah Rawan Kekeringan</h2>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537353153168!3d-37.816279742021665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d4a9c8b5b1!2sMelbourne%20CBD%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sid!4v1630000000000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <p>Ganti koordinat untuk daerah spesifik, seperti Indonesia.</p>
    </section>

    <section id="galeri">
        <h2>Galeri Media</h2>
        <div class="gallery">
            <img src="https://via.placeholder.com/200x150?text=Gambar+Kekeringan+1" alt="Kekeringan 1">
            <img src="https://via.placeholder.com/200x150?text=Gambar+Kekeringan+2" alt="Kekeringan 2">
            <img src="https://via.placeholder.com/200x150?text=Gambar+Kekeringan+3" alt="Kekeringan 3">
        </div>
        <p>Ganti dengan gambar asli dari sumber seperti Unsplash atau BNPB.</p>
    </section>

    <section id="tips">
        <h2>Tips Pencegahan Interaktif</h2>
        <div class="quiz">
            <p>Pertanyaan: Apa langkah utama hemat air?</p>
            <button onclick="checkAnswer('a')">a) Mandi lama</button>
            <button onclick="checkAnswer('b')">b) Gunakan irigasi hemat</button>
            <button onclick="checkAnswer('c')">c) Buang air</button>
            <p id="result"></p>
        </div>
    </section>

    <section id="kontak">
        <h2>Kontak dan Laporan</h2>
        <form id="contactForm" action="/admin/contact.php" method="POST">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Pesan atau laporan kekeringan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
        <p>Sumber: BNPB, WHO, FAO.</p>
    </section>

    <footer>
        <p>&copy; 2023 Situs Edukasi Bencana Kekeringan. Dibuat untuk kesadaran publik.</p>
    </footer>

    <script src="/assets/js/script.js"></script>
</body>
</html>