<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 04.06.18
 * Time: 15:43
 */
<<<<<<< HEAD
class Save
{
=======




class Save
{

>>>>>>> 01aeb8328c9f2a1f967ee4445b6cbee81dde03f2
    private $connection;

    public function __construct($conn)
    {
        $this->connection = $conn;
    }

<<<<<<< HEAD
=======
#$this->query = $db->prepare('INSERT INTO users VALUES(:name, :surname, :pswd, :email) ');

>>>>>>> 01aeb8328c9f2a1f967ee4445b6cbee81dde03f2
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
