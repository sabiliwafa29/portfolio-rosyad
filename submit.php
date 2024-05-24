<?php
include 'db.php'; // Memasukkan file koneksi database

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $telepon = $_POST['telepon'];

    // Menyiapkan statement SQL untuk insert data
    $sql = "INSERT INTO nama_tabel (username, telepon) VALUES (?, ?)";

    // Mempersiapkan prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $telepon);

    // Menjalankan prepared statement
    if ($stmt->execute()) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
    // Menutup koneksi
    $conn->close();
}
?>

