<?php

 

  function persegi($panjang,$tinggi) {
      if($panjang<0||$tinggi<0) {

        throw new Exception("Error tuh kan");
      }
      return true;

  }

  try {
      persegi(-2,9);
      echo 'selamat anda benar';
  }   catch (Exception $s) {
    echo 'Message: ' .$s->getMessage();

  } finally {
    echo " finally";
  }