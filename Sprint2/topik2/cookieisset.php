<?php

$cookie_name = "pengguna";
$cookie_value= "shofi";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); //86400detik = 1 hari


?>

<html>
    <body>
    
    
    1
        setcookie($cookie_name, "sayyidah", time() + (86400 * 30), '/'); //86400detik = 1 hari

        if(isset($_COOKIE[$cookie_name])){
            echo $_COOKIE[$cookie_name] . " udah di set";
        }else{
            echo $cookie_name . "belum di set";
        }
    <?php

        
        ?>

    
    </body>
</html>