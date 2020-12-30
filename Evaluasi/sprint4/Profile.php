<?php
session_start(); 
class Profile { 

    public function profile(){ 
        if( isset($_SESSION['status']) ){ 
            ?>
            <h3><a href="index.php">Home</a> | <a href="blog_addpost.php">Buat Artikel</a> | <a href="Logout.php">Keluar</a></h3>
            <hr>
            <center>
            <h1>Profile</h1>
            <p>
                Selamat Datang <b><i><?php echo $_SESSION['name']; ?></i></b>  
            </p>
            </center>
            <?php
        }else{ 
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index.php">Login</a>';
        }
    }

}

$profile = new Profile(); 