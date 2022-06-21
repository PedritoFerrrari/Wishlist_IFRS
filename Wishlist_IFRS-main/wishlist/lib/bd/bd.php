<?php
class Banco
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_DATABASE = "wishlist";

    function conectar()
    {
        $conn = new PDO("mysql:host=" . SELF::DB_HOST . ";dbname=" . SELF::DB_DATABASE . ";charset:utf8", SELF::DB_USER, SELF::DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}