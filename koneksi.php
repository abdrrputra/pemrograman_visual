<?php
// Membuat koneksi ke server database
$host = 'localhost';  // Sesuaikan dengan host database Anda
$user = 'root';       // Username database Anda
$pass = '';           // Password database Anda
$db_name = 'login';   // Nama database yang ingin dipilih

// Membuat koneksi menggunakan mysqli
$conn = mysqli_connect($host, $user, $pass);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memilih database
mysqli_select_db($conn, $db_name);
?>
