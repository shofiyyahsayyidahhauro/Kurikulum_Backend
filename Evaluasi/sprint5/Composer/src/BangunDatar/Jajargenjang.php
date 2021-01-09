<?php

namespace App\BangunDatar;

class Jajargenjang { //rumus Luas Jajagenjang = Alas * Tinggi.
    public function BangunJajargenjang() 
    {
    if (isset($_POST['submitJajargenjang'])){
        $alas = $_POST;
        $tinggi = $_POST;
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = $alas * $tinggi;
        
echo "Nilai Alas = $alas <br>";
echo "Nilai Tinggi = $tinggi <br>";
echo "Luas = $luas";
}
    }
}

?>