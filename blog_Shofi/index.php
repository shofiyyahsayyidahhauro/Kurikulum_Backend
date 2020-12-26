<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Session Login</title>
</head>
<body>
    
<div>
</div>
    <?php 
    require_once('Blog.php'); // include Blog.php file
    if(isset($_SESSION['status'])){ // validasi status login atau belum
        ?>
        <h3> <a href="Profile.php">Profile</a> </h3> 
        <?php
    }else{ // jika blom login maka
        ?>
        <h3> <a href="user_login.php">Login</a> </h3> 
        <h3> <a href="register.php">Registrasi</a> </h3> 
        <button type="submit"></button>

        <?php
    }
    
    ?>
    <hr>
    <?php 
    $blog = new Blog();
    $blog->blog_index();
    ?>
                
</body>
</html>