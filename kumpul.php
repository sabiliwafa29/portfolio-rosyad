<?php
include 'db.php'; // Memasukkan file koneksi database

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $telepon = $_POST['telepon'];

    // Mempersiapkan prepared statement
    $stmt = $conn->prepare("INSERT INTO users (username, telepon) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $telepon);

    // Menjalankan prepared statement
    if ($stmt->execute()) {
        echo "<script>if(Notification.permission === 'granted') { new Notification('Notifikasi', { body: 'Data berhasil disimpan.' }); } else if(Notification.permission !== 'denied') { Notification.requestPermission().then(permission => { if(permission === 'granted') { new Notification('Notifikasi', { body: 'Data berhasil disimpan.' }); } }); }</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
    // Menutup koneksi
    $conn->close();
}
?>

