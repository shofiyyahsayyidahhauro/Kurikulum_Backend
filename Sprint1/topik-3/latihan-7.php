<?php
for ($b=0; $b<8;  $b++){
    for ($s=0; $s<8; $s++){
        if($s==7||$b==9){
            echo " + ";

        }else
        echo " 0 ";
        
    }
    echo PHP_EOL;
}
