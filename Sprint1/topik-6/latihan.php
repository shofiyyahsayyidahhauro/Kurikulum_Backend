<?php
    
    Calc Rectangle Area = Width x Length

    $rectangle = function($width, $length){
        $result = $width * $length;
        echo $result;
    };

    echo "Masukkan Lebar Area : ";
    $length = (int) fgets(STDIN);
    var_dump($length);
    echo "Masukkan Panjang Area : ";
    $width = (int) fgets(STDIN);

    echo "Luasnya Adalah : ";
    echo $rectangle($width, $length);
    echo ".cm";



