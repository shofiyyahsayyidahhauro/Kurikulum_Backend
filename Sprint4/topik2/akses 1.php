<?php
session_start();
if(isset($_SESSION['username'])){ ?>
<h2>HOME</h2>
<p>
selamat datang wahai pengguna
"<?php echo $_SESSION['username']; ?>".
klik <a href="form login 2.php">disini</a> untuk logout.
</p>

<?php

} else { ?>
<h2> maaf...</h2>
<p>
anda tidak bisa mengakses halaman ini.
silahkan <a href="form login 1.php">login</a> terlebih dahulu.
</p>
<?php
}
?>