<?php

$cookie_name = "pengguna";
$cookie_value= "shofi";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); //86400detik = 1 hari

?>

<html>
    <body>
    
    <?php
        echo $_COOKIE[$cookie_name];
        ?>

    </body>
</html>