<?php 
include 'koneksi.php';
$nama_barang = $_POST['nama_barang'];
$jumlah_stok = $_POST['jumlah_stok'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
 
mysqli_query($conn, "INSERT INTO barang VALUES('','$nama_barang','$jumlah_stok','$harga_beli','$harga_jual')");
 
header("location:kategori.php?pesan=input");
?>