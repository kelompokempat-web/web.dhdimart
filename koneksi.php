<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "db_toko";

// Membuat koneksi
$conn = new mysqli($serverName, $username, $password, $dbName);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>