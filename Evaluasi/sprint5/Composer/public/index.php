<?php 

require '../vendor/autoload.php';
use App\BangunDatar\Jajargenjang;
use App\BangunDatar\Layanglayang;

?>

<html>
<fieldset>
<legend>Luas Jajargenjang</legend>
<form action="" method="post">
    <table>
        <tr><td>Alas<input type="text" name="alas"></td></tr>
        <tr><td>Tinggi<input type="text" name="tinggi"></td></tr>
        <tr><td><input type="submit" name="submitJajargenjang"></td></tr>
    </table>
</form>

<?php
$Jajargenjang = new Jajargenjang;
$Jajargenjang->BangunJajargenjang();
?>

</fieldset>
</html>
<br><br><br>
_________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
<br><br><br><br><br>


<html>
<fieldset>
<legend>Luas Layang-Layang</legend>
<form action="" method="post">
    <table>
        <tr><td>Diagonal 1<input type="text" name="d1"></td></tr>
        <tr><td>Diagonal 2<input type="text" name="d2"></td></tr>
        <tr><td><input type="submit" name="submitLayanglayang"></td></tr>
    </table>
</form>

<?php
$Layanglayang = new Layanglayang;
$Layanglayang->BangunLayanglayang();
?>

</fieldset>
</html>


