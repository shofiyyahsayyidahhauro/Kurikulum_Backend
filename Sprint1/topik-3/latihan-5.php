<?php

for ($t= 1; $t<=6;  $t ++ ){
    for ($r=1; $r<=8; $r++){
        if($t<=$r){
          echo " ";
        }else
        echo " $r ";

    }
    echo PHP_EOL;
}
