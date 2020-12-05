<?php

session_start();

if(!isset($_SESSION['name'])){ //cek bila session belum di set 
    header('location:index.php'); //kembalikan ke halaman login
}

echo "<h1> Hello  ". $_SESSION['name']."<h1>";

if (isset($_POST['logout'])){ //jika klik tombol logout
    session_unset(); //hapus session
    header('location:index.php'); //kembalikan ke halamanindex.php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <from action="" method="POST">
        <input type="type="submit value="logout" name="logout">
    </from>
</body>
</html>