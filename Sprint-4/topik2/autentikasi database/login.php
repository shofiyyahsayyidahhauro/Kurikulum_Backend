<?php

session_start(); //untuk menggunakan Session 
$error = 'User name atau Password Salah'; //inisialisasi variable error
if (isset($_POST['submit'])) { //Jika submit maka lanjut
    if (empty($_POST['name']) || empty($_POST['pass'])) { //jika nilai name kosong atau nilai pass kosong maka 
        echo $error; //tampilkan variable error
    }else{ //jika tidak
        $name = $_POST['name']; //tampung nilai name pada variable name
        $pass = $_POST['pass']; //tampung nilai pass pada variable pass
        // mysqli_connect() function opens a new connection to the MySQL server. 
        $con = mysqli_connect('localhost', 'root', 'lenovo', 'app_pondok');//buat konek ke database
        // SQL query to fetch information of registerd users and finds user match.
        $login = mysqli_query($con,"SELECT name, password from login where name='$name' AND password='$pass' "); ///mencari user yang cocok di database
        $cek = mysqli_num_rows($login); //menghitung data yang cocok di database

        if ($cek > 0) { //jika data yang cocok lebih dari nol
            $_SESSION['name'] = $name; // Initializing Session
            $_SESSION['status'] = "login"; //inisialisasi Session Login
            header("Location: profile.php"); // Redirecting To Profile Page
        }else{ //jika kosong 
            echo $error; //tampilkan error
        }


    }
}