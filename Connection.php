<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 04.06.18
 * Time: 10:35
 */
class Connetcion
{
    private static $db;
    private function __construct()
    {
        $config = require_once 'config.php';

        $host = $config['host'];
        $database = $config['database'];
        $user = $config['user'];
        $password = $config['password'];

        try {

            self::$db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password, [
                PDO::ATTR_EMULATE_PREPARES => false, #odzielnie zapytania, odzielnie parametry na serwerze mysql
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        } catch (PDOException $error) {
            exit("database error");
        }

    }

    public static function getConn()
    {
        if(self::$db === null) {
            new self();
            return self::$db;
        }
    }
}
