<?php include '../Kekeringan_SIMB/both/header.php'; ?> 
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencegahan dan Tips - Bencana Kekeringan</title>
   <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section id="pencegahan">
        <h2>Langkah Pencegahan 🌳</h2>
        <p>Mitigasi kekeringan memerlukan upaya kolektif dari individu hingga pemerintah:</p>
        <ul>
            <li>**Konservasi Air:** Pemanfaatan air secara efisien, daur ulang air, dan penggunaan teknologi irigasi tetes.</li>
            <li>**Reboisasi dan Penghijauan:** Menanam pohon, terutama di daerah resapan air, untuk meningkatkan cadangan air tanah.</li>
            <li>**Pembangunan Infrastruktur Air:** Membangun dan memelihara waduk, embung, dan sumur resapan.</li>
            <li>**Pendidikan Masyarakat:** Kampanye kesadaran tentang pentingnya hemat air dan adaptasi iklim.</li>
        </ul>
        
    </section>

    <section id="tips">
        <h2>Tips Hemat Air Interaktif 💡</h2>
        <div class="quiz">
            <p>**Pertanyaan:** Apa langkah utama untuk menghemat air di rumah tangga?</p>
            <button onclick="checkAnswer('a')">a) Mandi dengan bak mandi penuh</button>
            <button onclick="checkAnswer('b')">b) Memperbaiki keran yang bocor</button>
            <button onclick="checkAnswer('c')">c) Mencuci mobil setiap hari</button>
            <p id="result" class="quiz-result"></p>
        </div>
    </section>

    <footer>
        <p>© 2023 Situs Edukasi Bencana Kekeringan. Dibuat untuk kesadaran publik.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>