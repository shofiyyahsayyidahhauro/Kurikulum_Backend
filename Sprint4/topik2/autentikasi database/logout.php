<?php
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman 1st_index.php 
    header("location: 1st_indexlogin.php");
?>
