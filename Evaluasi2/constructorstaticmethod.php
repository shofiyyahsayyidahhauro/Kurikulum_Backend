<?php

// -SOAL-
// Rancanglah sistem yang berisi beberapa class yang menangani kasus pendaftaran santri baru
// Rancangan harus mempunyai constructor method dan static method

class Register{
    private function __construct($NamaSantri, $alamat, $NIK, $NomorTelfon ){ 
        self::$NamaSantri=$NS; 
        self::$alamat=$alamat;
        self::$NIK=$NIK;
        self::$tanggalLahir=$tL;
        self::$NomorTelfon=$noHp;

    }
    private static function Register(){
    
        for ($x = 0; $x<5; $x++)
        echo self::$NS, self::$alamat, self::$NIK, self::$tL, self::$noHp;

    }

}
echo "Masukan Nama Pendaftar : ".PHP_EOL;
$NS = (int) fgets(STDIN);
echo "Masukan Alamat Pendaftar : ".PHP_EOL;
$NIK = (int) fgets(STDIN);
echo "Masukan NIK Pendaftar : ".PHP_EOL;
$NS = (int) fgets(STDIN);
echo "Masukan Tanggal Lahir Pendaftar : ".PHP_EOL;
$NIK = (int) fgets(STDIN);
echo "Masukan Nomor Aktif Pendaftar : ".PHP_EOL;
$NIK = (int) fgets(STDIN);

$Register = new Register();

print_r($Register);


?>
