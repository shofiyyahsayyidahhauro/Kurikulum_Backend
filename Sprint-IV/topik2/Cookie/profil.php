<?php
session_start();
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['email']) ){
    header('Location: index.php');
}
 
?>
 
<!DOCTYPE html>
<head>
    <title>Profil user</title>
</head>
<body>
    <!-- Menampilkan isi session email -->
    <h3> Halo Selamat Datang di form sederhana cookie <?php echo $_SESSION['email']; ?> </h3>
    <a href="logout.php">Keluar</a>
</body>
</html>