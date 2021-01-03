<?php

class Persegi {
    public function BangunPersegi($sisi) 
    {
        
    if( isset($_POST['submit']))
    $sisi=$_POST['sisi'];
    $luas=($sisi * $sisi);


echo "Nilai Sisi = $sisi <br>";
echo "Luas = $luas";

    } 
}


?>