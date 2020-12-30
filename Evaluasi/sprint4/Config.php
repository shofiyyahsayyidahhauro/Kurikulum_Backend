<?php


class Config
{
    public function connect()
    {
        $con = mysqli_connect('localhost', 'root', 'password', 'hasil_blog'); 

        return $con;
    }
}