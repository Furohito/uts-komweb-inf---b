<?php
// Koneksi ke database MySQL
$servername = "localhost";  // Gunakan "localhost" jika MySQL di Niagahoster berjalan di server yang sama
$username = "hakimm";  // Username yang Anda buat
$password = "Punyahakim25!";  // Password yang Anda buat
$dbname = "portfolio_db";  // Nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek koneksi apakah berhasil atau tidak
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Jika gagal, tampilkan pesan error
}
?>
