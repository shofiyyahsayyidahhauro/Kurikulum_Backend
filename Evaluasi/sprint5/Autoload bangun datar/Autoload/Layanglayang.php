<?php

class Layanglayang {
    public function BangunLayanglayang($d1, $d2) 
    {
        
    if( isset($_POST['submitLayanglayang']))
    $d1=$_POST['diagonal_1'];
    $d2=$_POST['diagonal_2'];
    $luas= 1/2 * $d1 * $d2;


echo "Nilai Diagonal 1 = $d1 <br>";
echo "Nilai Diagonal 2 = $d2 <br>";
echo "Luas = $luas";

    } 
}


?>