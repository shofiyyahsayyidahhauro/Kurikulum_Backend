<?php
$lingkaran= function ($phi,$jari){
    $luas = 3.14 * $jari * $jari ;
    return$luas;

};
echo"input jari:";
$jari = (int)fgets(STDIN);
echo"input phi:";
$phi = (int)fgets(STDIN);
echo $lingkaran($phi,$jari);
?>


