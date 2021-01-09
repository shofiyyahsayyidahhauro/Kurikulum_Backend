<?php
class Lingkaran {
    public function BangunJajargenjang($alas, $tinggi) 
    {

        if( isset($_POST['submitJajargenjang']))
        $alas =$_POST['alas'];
        $tinggi=$_POST['tinggi'];
        $luas = $alas * $tinggi;

 echo "Nilai Alas = $alas <br>";
 echo "Nilai Tinggi = $tinggi <br>";
 echo "Luas = $alas * $tinggi = $luas <br>";
 

    }
}

?>