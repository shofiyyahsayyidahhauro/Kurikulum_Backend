<?php

namespace App\BangunDatar;

class Layanglayang { //rumus Luas Layanglayang = ½ × d1 × d2.

    public function BangunLayanglayang() 
    {
    if (isset($_POST['submitLayanglayang'])){
        $d1 = $_POST;
        $d2 = $_POST;
        $d1 = $_POST['diagonal1'];
        $d2 = $_POST['diagonal2'];
        $luas = 1/2 * $d1 * $d2;
        
echo "Nilai diagonal 1 = $d1 <br>";
echo "Nilai diagonal 2 = $d2 <br>";
echo "Luas = $luas";
}
    }
}

?>