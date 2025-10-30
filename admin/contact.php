<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Konfigurasi email (ganti dengan email Anda)
    $to = "your-email@example.com"; // Ganti dengan email tujuan
    $subject = "Laporan Kekeringan dari $name";
    $body = "Nama: $name\nEmail: $email\nPesan: $message";
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan. Coba lagi.'); window.location.href='index.html';</script>";
    }
} else {
    echo "Akses tidak valid.";
}
?>