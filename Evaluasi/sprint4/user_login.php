
<?php

require_once('Login.php'); 
$login = new Login();

if(isset($_SESSION['status'])){ 
    header('Location: Profile.php');
}else{ 
?>  

<h3><a href="index.php">Home</a></h3>
<hr>
<center>
    <h1>Silahkan Login</h1>
        <form action="#" method="post">
            <label for="">Nama</label>
            <input type="text" name="name"><br><br>
            <label for="">Password</label>
            <input type="password" name="pass"><br><br>
            <input type="submit" name="submit" value="Login">

        </form>
</center>
<?php 
}
$login->login();  
?>