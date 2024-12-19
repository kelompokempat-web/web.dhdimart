<?php 
include 'koneksi.php';
$nama_kategori = $_POST['nama_kategori'];
 
mysqli_query($conn, "INSERT INTO kategori VALUES('','$nama_kategori')");
 
header("location:pemasok.php?pesan=input");
?>