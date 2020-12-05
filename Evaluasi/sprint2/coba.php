<?php
class Register {
  // Properties
  public $name;
  public $nik;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$name = new Register();
$nik = new Register();
$name->set_name('Nama');
$nik->set_name('Nik');

echo $name->get_name();
echo "<br>";
echo $nik->get_name();
?>