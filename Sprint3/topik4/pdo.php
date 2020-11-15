<?php



$server  = 'localhost';
$user    = 'root';
$pass    = 'lenovo';
$db_name = 'siswa';

try{

//untuk mmbuat koneksi.
    $conn= new PDO("mysql:host=$server;dnbame=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'selamat Anda berhasil konek ke database!';
}catch(PDOException $e)
{
    echo $e->getMessage();  
}

?>