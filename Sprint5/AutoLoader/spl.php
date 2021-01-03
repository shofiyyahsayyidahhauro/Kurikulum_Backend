<?php  
 spl_autoload_register(function($class){

  include ('Autoload/' . $class . '.php');
 });

 $Lingkaran = new Lingkaran;
 $Segitiga = new Segitiga;
 $Persegi = new Persegi;

 if(isset($_POST['submitkeliling'])){
     $jari = $_POST['jari'];
     $hasil = $Lingkaran->BangunLingkaran($jari);
     echo $hasil;
 }


 if(isset($_POST['submitsegitiga'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil = $Segitiga->BangunSegitiga($alas, $tinggi);
    echo $hasil;
}


if(isset($_POST['submitpersegi'])){
    $sisi = $_POST['sisi'];
    $hasil = $Persegi->BangunPersegi($sisi);
    echo $hasil;
}
?>
