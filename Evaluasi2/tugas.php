<?php

class Register{
    static $siswa = [];

    public function __construct()
    {
        print_r(self::$siswa);
    }

    public static function insertData($nama, $nik)
    {
        self::$siswa = [
            'nama' => $nama,
            'nik' => $nik,
        
        ];
    }
}

Register::insertData('Shofi', '054674');
new Register;