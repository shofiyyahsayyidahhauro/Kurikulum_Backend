<?php
$segitiga = function ($alas,$tinggi){
    $luas = 1/2 * $alas * $tinggi ;
    return$luas;

};
echo"input alas:";
$alas = (int)fgets(STDIN);
echo"input tinggi:";
$tinggi = (int)fgets(STDIN);
echo $segitiga ($alas,$tinggi);