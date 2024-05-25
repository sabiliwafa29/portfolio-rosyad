<?php
$servername = "localhost";
$username = "siwa04";
$password = "passwd29";
$dbname = "user_port";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Connected successfully";

?>

