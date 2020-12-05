<?php 
// koneksi database
require_once 'koneksi.php';

// menangkap data yang di kirim dari form
if(isset($_POST['submit'])){
$nama_barang = $_POST['nama_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
$tempat_kulakan = $_POST['tempat_kulakan'];
}

// menginput data ke database

$r="INSERT INTO barang (nama_barang, deskripsi_barang, tempat_kulakan) VALUES ('$nama_barang', '$deskripsi_barang', '$tempat_kulakan')";


// mengalihkan halaman kembali ke index.php

if(mysqli_query($koneksi, $r)){
    header("location:index.php");
}else{
    echo "Tambah data gagal!!".$koneksi->error;
}

mysqli_close($koneksi);

?>