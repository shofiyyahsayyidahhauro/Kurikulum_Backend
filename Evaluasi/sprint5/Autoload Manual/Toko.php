<?php
class Toko {
 public function jualBaju($baju){
   echo "Class " . __CLASS__ . " : ";
   echo "Menjual baju $baju\n";
   return "Baju $baju";
 }
}