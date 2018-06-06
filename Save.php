<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 04.06.18
 * Time: 15:43
 */
class Save
{
    private $connection;

    public function __construct($conn)
    {
        $this->connection = $conn;
    }

    public function saveForm($name, $surname, $pswd, $email)
    {

        $query = $this->connection->prepare('INSERT INTO users VALUES(:name, :surname, :pswd, :email) ');

      $query->bindValue(':name', $name, PDO::PARAM_STR);
      $query->bindValue(':surname', $surname, PDO::PARAM_STR);
      $query->bindValue(':pswd', $pswd, PDO::PARAM_STR);
      $query->bindValue(':email', $email, PDO::PARAM_STR);
      $query->execute();

    }
}
