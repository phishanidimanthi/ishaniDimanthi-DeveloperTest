<?php

class Database{

    public static $connection;

    public static function setUpConnection(){

        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", 'I$Dk989$ishani', "to-do-list", "3306");
        }
    }
}

?>