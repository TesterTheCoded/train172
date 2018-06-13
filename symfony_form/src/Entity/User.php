<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM; //konfiguracja xml albo yaml, nie w entity, klasa nie może zawierać informacji o tym, że jest to encja doctrinowa
use Symfony\Component\Validator\Constraint as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $name;
    private $surname;
    private $password;
    private $email;
    private $roles;

    public function __construct() {
        $this->roles = array('ROLE_USER');
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setPassword($pswd)
    {
        $this->password = $pswd;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}