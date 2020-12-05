<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$tempat_kulakan = $_POST['tempat_kulakan'];

// update data ke database
mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', deskripsi_barang='$deskripsi_barang', tempat_kulakan='$tempat_kulakan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>