<?php

namespace App\Controllers;

class Lingkaran {
    public function BangunLingkaran() 
    {
    if (isset($_POST['submitkeliling'])){
        $jari = $_POST;
        $jari = $_POST['jari'];
        $luas = 22/7 * $jari * $jari;
        $keliling = 22/7 * ($jari * $jari);

   

    echo "Nilai Jari - Jari = $jari <br>";
    echo "Luas = 22/7 * $jari * $jari = $luas <br>";
    echo "Keliling = 22/7 * ($jari + $jari) = $keliling";

}
    }
}

?>