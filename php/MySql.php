<?php

    class MySql {
        private static $host = "localhost";
        private static $dbName = "aep";
        private static $username = "root";
        private static $password = "adminadmin";
        private static $conn;

        static function Connect() {
            try {
                if(self::$conn == null) {
                    self::$conn = new PDO('mysql:host='.self::$host.';dbname='.self::$dbName, self::$username, self::$password);
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    return self::$conn;
                }

                return self::$conn;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }