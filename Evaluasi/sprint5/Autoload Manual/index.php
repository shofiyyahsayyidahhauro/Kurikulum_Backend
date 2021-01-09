<?php
 spl_autoload_register(function ($class) {
   include $class . '.php';
 });

 
 $toko = new Toko();
 $baju = $toko->jualBaju('Indah dan menarik peminat pembeli');
 $penjual = new Penjual();
 $barang= $penjual->menjualBarang('Barang-barang unik ke Pembeli');

 ?>