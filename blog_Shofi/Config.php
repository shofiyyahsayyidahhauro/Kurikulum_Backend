<?php


class Config
{
    public function connect()
    {
        $con = mysqli_connect('localhost', 'root', 'password', 'app_pondok'); 

        return $con;
    }
}