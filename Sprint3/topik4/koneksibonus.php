<?php
    $con = mysqli_connect('localhost', 'root', 'lenovo','santri');
    if($con) {
        echo 'Wah,,selamat..anda berhasil terkoneksi dengan database';
    }else{
        echo 'Maaf,,anda tidak bisa mengakses database';
    }

?>
