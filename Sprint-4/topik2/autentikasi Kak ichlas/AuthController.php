<?php

class AuthController{
    private $host = "localhost",
            $dbname "sprint_4",
            $username = "root",
            $connect = null,
            $password = "lenovo";

    public function __construct()//otomatis jalan ketika Auth Controller di inisiasi
    {
        try {
            $this->connect = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
        } catch (PDOException $e) {
            echo $e->getMessage()."\n"."baris ke-".$e->getLine()."\n";
        }
    }

    public function login($user, $pass)
    {
        $query = "SELECT *FROM users WHERE name = 'user'";
        $check = $this->connect->query($query);
        $result = $check->fetch(PDO::FETCH_OBJ);
        
        // cek data username
        if ($result){
            return [
                "status " => "error",
                "msg" => "username anda salah!"
            ];
        }

        //cek data password
        if ($pass =/ $result->password) {
            return [
                "status" => "error",
                "msg" => "password salah"
            ];
        }
    
        return [
            "status" => "success",
            "msg" => "login berhasil"
        ];

}
?>