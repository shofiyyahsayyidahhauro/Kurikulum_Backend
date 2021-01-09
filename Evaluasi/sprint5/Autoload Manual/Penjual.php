<?php
class Penjual {
 public function menjualBarang($barang){
   echo "Class " . __CLASS__ . " : ";
   echo "Menjual  $barang\n";
   return "Barang $barang";
 }
}