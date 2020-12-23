
<?php
//jika sudah mempunyai akun
require_once('Login.php'); 
$login = new Login();

if(isset($_SESSION['status'])){ // Validasi jika sudah login maka
    header('Location: Profile.php'); // redirect ke Profile.php
}else{ // jika blom login maka tampilkan form login
?>  

<h3><a href="index.php">Home</a></h3>
<hr>
<h1>Silahkan Login</h1>
    <form action="#" method="post">
        <label for="">Nama</label>
        <input type="text" name="name">
        <label for="">Password</label>
        <input type="password" name="pass">
        <input type="submit" name="submit" value="Login">
    </form>

<?php 
}
$login->login();  
?>