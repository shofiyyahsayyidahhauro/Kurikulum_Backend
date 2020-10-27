<?php

for ($t= 0; $t<=8;  $t ++ ){
    for ($r=0; $r<=8; $r++){
        if($t<=$r||$t==9){
            echo " + ";
        }else
        echo " - ";

    }
    echo PHP_EOL;
}
