<?php

namespace App\Controllers;

class Persegi {
    public function BangunPersegi() 
    {   
    if( isset($_POST['submitpersegi']))
    $sisi=$_POST;
    $sisi=$_POST['sisi'];
    $luas=($sisi * $sisi);


echo "Nilai Sisi = $sisi <br>";
echo "Luas = $luas";

    } 
}


?>