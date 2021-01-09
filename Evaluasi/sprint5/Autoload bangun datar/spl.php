<?php  
 spl_autoload_register(function($class){

  include ('Autoload/' . $class . '.php');
 });

 $Jajargenjang = new Jajargenjang;
 $Layanglayang = new Layanglayang;
 
 if(isset($_POST['submitJajargenjang'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil = $Layanglayang->BangunLayanglayang($alas, $tinggi);
    echo $hasil;
}


 if(isset($_POST['submitLayanglayang'])){
    $d1 = $_POST['diagonal 1'];
    $d2 = $_POST['diagonal 2'];
    $hasil = $Layanglayang->BangunLayanglayang($d1, $d2);
    echo $hasil;
}

?>
