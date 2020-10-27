<?php
for ($t= 0; $t<10;  $t ++ ){
    for ($r=0; $r<=10; $r++){
        if($t==$r){
            echo " + ";
        }else
        echo " - ";

    }
    echo PHP_EOL;
}
