<?php 
include 'koneksi.php';
$nama_pemasok = $_POST['nama_pemasok'];
$kontak = $_POST['kontak'];
 
mysqli_query($conn, "INSERT INTO pemasok VALUES('','$nama_pemasok','$kontak')");
 
header("location:databarang.php?pesan=input");
?>