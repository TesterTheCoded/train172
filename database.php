<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 04.06.18
 * Time: 10:35
 */
$config = require_once 'config.php';

try{

    $db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8",$config['user'],$config['password'], [
        PDO::ATTR_EMULATE_PREPARES => false, #odzielnie zapytania, odzielnie parametry na serwerze mysql
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]); #zamiast konkatenacji

}catch (PDOException $error){
    echo $error -> getMessage();
    exit("database error");
}