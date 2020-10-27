<?php 
$trapesium = function ($sisi1,$sisi2,$tinggi){
    $luas = 1/2 * $sisi1 * $sisi2 *$tinggi;
    return$luas;

};
echo"input sisi1:";
$sisi1 = (int)fgets(STDIN);
echo"input sisi1:";
$sisi2 = (int)fgets(STDIN);
echo"input tinggi:";
$tinggi = (int)fgets(STDIN);
echo $trapesium($sisi1,$sisi2,$tinggi);
?>