<?php

// @return PDO;
class DataBase
{
    private static $instance = null;

    public static function getPdo()
    {
        if(self::$instance === null) {

            self::$instance = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8;', 'root', 'root', [
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        }
        return self::$instance;

    }

}
