<?php


class perhitungan{
     public static function persegi(){
         echo "masukkan panjang area :";
         $panjang =trim(fgets(STDIN));
         echo "masukkan tinggi area :";
         $tinggi =trim(fgets(STDIN));
         
           echo "Luas Persegi : ".$panjang*$tinggi;
           echo "Keliling Persegi : ".(($panjang+$tinggi)*2);

         

    
     }
 }

 perhitungan::persegi();
 echo $persegi;
