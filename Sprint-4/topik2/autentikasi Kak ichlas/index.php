<?php

session_start();

if(isset($_SESSION['status'])){
    header("location:beranda.php")
}
 
require("AuthController.php");

if(isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['pass'];

    $connect = new AuthController;
    $login =$connect->login($ussername, $password);

    if ($login['status'] == 'error'){
        echo $login['msg'];
    } else {
        $_SESSION['status'] = 'logged_in';
        $_SESSION['status'] = $username;
        header('location:beranda.php');
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>User Login Database</h1>
    <form action="" method="POST">
        <label for="">Nama </label>
        <input type ="text" name="name" placeholder="username">
        <label for="">Password </label>
        <input type="password" name="pass" placeholder="password">
        <input type="submit" name="submit" value="login">
    </form>  
</body>
</html>
