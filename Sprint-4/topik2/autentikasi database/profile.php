<?php
session_start(); //untuk menggunakan SESSTION
if( isset($_SESSION['status']) ){ //chek apakah status sudah login 
    echo '<h1>Profile</h1>'; 

    echo 'Selamat datang ' . $_SESSION['name'];

    echo '<br>';
    echo '<a href="logout.php">Logout<a>'; //tombol lgout
}else{ //jika blom login maka
    echo 'Silahkan Login Terlebih dahulu <br>';
    echo '<a href="index.php">Login</a>';
}