<?php
$calculator = function($a , $b ){
    $hasil = $a + $b;
    $hasil = $a - $b;
    $hasil = $a * $b;
    $hasil = $a / $b;
    return$hasil;
};

echo "masukkan angka ke 1 : "; 
$a = (int) fgets (STDIN);
echo "masukkan angka ke 2: ";
$b = (int) fgets (STDIN);
echo "hasilnya adalah : ";

echo $calculator($a , $b);


    

