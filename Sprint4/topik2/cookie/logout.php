<?php

setcookie('email', '',time() - (3600 * 30), "/");

header('location: index.php');

exit;

?>