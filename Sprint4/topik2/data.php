<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<h1> DATA BARANG </h1>

      <form action="akses 2.php" method="POST">
      <table border="1" bordercolor="#ff00ff">
      <tr><td><input type="text" name="nama_kurir" placeholder= "Nama Kurir"><tr><td>
      <tr><td><input type="text" name="nama_pengirim" placeholder= "Nama Pengirim"><tr><td>
      <tr><td><input type="text" name="asal_barang" placeholder="Asal Barang"><tr><td>
      <tr><td><input type="text" name="tujuan_barang" placeholder="Tujuan Barang"><tr><td>
      <tr><td><input type="submit" value="submit"><tr><td>
      </table>
      </form>
    <br>



<?php 
session_start();
unset($_SESSION['username']);
?>
<h2>Selamat tinggal</h2>
<p>
Anda telah keluar dari sistem.
Klik <a href="form login 2.php">disini</a> untuk masuk kembali.
</p>