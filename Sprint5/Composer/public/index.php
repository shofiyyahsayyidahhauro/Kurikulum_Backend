<?php 

require '../vendor/autoload.php';
use App\Controllers\Lingkaran;

use App\Controllers\Segitiga;

use App\Controllers\Persegi;

?>

<html>
<fieldset>
<!-- untuk menampilkan teks pada kolom fielshed -->
<legend>Luas Lingkaran</legend>
<form action="" method="post">
    <table>
        <tr><td>Jari -Jari <input type="text" name="jari"></td></tr>
        <tr><td><input type="submit" name="submitkeliling"></td></tr>
    </table>
</form>

<?php
$Lingkaran = new Lingkaran;
$Lingkaran->BangunLingkaran();
?>

<fieldset>
<!-- untuk menampilkan teks pada kolom fielshed -->
<legend>Luas Segitiga</legend>
<!-- membuat link -->
<form action="" method="post">
<table>
<tr><td>Alas<input type="text" name="alas"></td></tr>
<tr><td>Tinggi<input type="text" name="tinggi"></td></tr>
<tr><td><input type="submit" name="submitsegitiga"></td></tr>
</table>
</form>

<?php
$Segitiga = new Segitiga;
$Segitiga->BangunSegitiga();
?>

</fieldset>
<br><br>

<fieldset>
<!-- untuk menampilkan teks pada kolom fielshed -->
<legend>Luas Persegi</legend>
<!-- membuat link -->
<form action="" method="post">
<table>
<tr><td>Sisi<input type="text" name="sisi"></td></tr>
<tr><td>Sisi<input type="text" name="sisi"></td></tr>
<tr><td><input type="submit" name="submitpersegi"></td></tr>
</table>
</form>
<?php
$Persegi = new Persegi;
$Persegi->BangunPersegi();
?>
</fieldset>
</html>