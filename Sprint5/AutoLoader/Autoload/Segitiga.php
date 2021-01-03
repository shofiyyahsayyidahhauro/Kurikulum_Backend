<?php

class Segitiga {
    public function BangunSegitiga($alas, $tinggi) 
    {

    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $luas=($alas * $tinggi) / 2;

echo "Nilai Alas = $alas <br>";
echo "Nilai Tinggi = $tinggi <br>";
echo "Luas = $luas";


    } 
}


?>
