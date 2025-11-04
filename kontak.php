<?php include '../Kekeringan_SIMB/both/header.php'; ?> 
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak dan Laporan - Bencana Kekeringan</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section id="kontak">
        <h2>Kontak dan Laporan 📞</h2>
        <form id="contactForm" action="admin/contact.php" method="POST">
            <input type="text" name="name" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <textarea name="message" placeholder="Pesan atau deskripsi laporan kekeringan (lokasi, tingkat keparahan)" required></textarea>
            <button type="submit">Kirim Laporan/Pesan</button>
        </form>
        <div class="contact-info">
            <h3>Informasi Kontak Darurat</h3>
            <p>**BNPB (Badan Nasional Penanggulangan Bencana):** [Nomor Darurat]</p>
            <p>**Sumber Data:** BNPB, WHO, FAO.</p>
        </div>
    </section>

    <footer>
        <p>© 2023 Situs Edukasi Bencana Kekeringan. Dibuat untuk kesadaran publik.</p>
    </footer>
</body>
</html>