<?php

namespace App\Controllers;

class Segitiga {
    public function BangunSegitiga() 
    {
        if (isset($_POST['submitsegitiga'])){
    $alas=$_POST;
    $tinggi=$_POST;
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $luas=($alas * $tinggi) / 2;

echo "Nilai Alas = $alas <br>";
echo "Nilai Tinggi = $tinggi <br>";
echo "Luas = $luas";


         } 
    }
}

?>
