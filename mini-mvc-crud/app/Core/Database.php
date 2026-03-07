<?php

class Database
{
    private static $host = "localhost";
    private static $dbname = "mini_mvc";
    private static $username = "root";
    private static $password = "";

    public static function connect()
    {
        try {
            return new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                self::$username,
                self::$password
            );
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    }
}
