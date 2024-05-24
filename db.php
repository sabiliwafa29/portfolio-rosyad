<?php
$servername = "213.35.117.246";
$username = "root";
$password = "";
$dbname = "user_port";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

