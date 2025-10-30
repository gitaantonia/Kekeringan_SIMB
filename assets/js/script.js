// Fungsi untuk quiz
function checkAnswer(answer) {
    const result = document.getElementById('result');
    if (answer === 'b') {
        result.textContent = 'Benar! Gunakan irigasi hemat.';
    } else {
        result.textContent = 'Salah. Coba lagi!';
    }
}

// Event listener untuk form (opsional, karena form dikirim ke PHP)
document.getElementById('contactForm').addEventListener('submit', function(e) {
    // Biarkan form dikirim ke PHP, tapi bisa tambah validasi JS di sini
    alert('Mengirim pesan...');
});