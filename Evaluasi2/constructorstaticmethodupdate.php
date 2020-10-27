<?php
class Register {
  // Properties
  public $name;
  public $adress;
  public $nik;
  public $notelp;
  public $birthdate;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$name = new Register();
$adress = new Register();
$nik = new Register();
$notelp = new Register();
$birthdate = new Register();

$name->set_name('Nama');
$adress->set_name('adress');
$nik->set_name('Nik');
$notelp->set_name('No telp');
$birthdate->set_name('Tanggal lahir');

echo $name->get_name();
echo "<br>";
echo $adress->get_name();
echo "<br>";
echo $nik->get_name();
echo "<br>";
echo $notelp->get_name();
echo "<br>";
echo $birthdate->get_name();
?>