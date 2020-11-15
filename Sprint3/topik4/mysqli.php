<?php

  $koneksi = mysqli_connect("localhost", "root","lenovo","santri");
  if (mysqli_connect_error()) {
      echo "maaf,tidak dapat tersambung ke database". mysqli_connect_error();

  }else{
      echo "Selamat! koneksi tersambung!".  mysqli_connect();
  }
?>
