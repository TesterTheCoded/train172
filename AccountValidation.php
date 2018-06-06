<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 30.05.18
 * Time: 09:18
 */

class AccountValidation
{
    const NAME_PATTERN = "/^[a-zA-Z]*$/";
    const PASSWORD_PATTERN = "/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/";

<<<<<<< HEAD
    protected $errorMessages = array();
    protected $formValues = [];

=======

    protected $errorMessages = array();
    protected $formValues = [];



>>>>>>> 01aeb8328c9f2a1f967ee4445b6cbee81dde03f2
    public function validateNotEmpty($val, $key)
    {
        if(empty($val)) {
            $this->errorMessages[$key] = "enter require data";
        }
    }

<<<<<<< HEAD
=======

>>>>>>> 01aeb8328c9f2a1f967ee4445b6cbee81dde03f2
    public function validateName($val, $key)
    {
        if (!preg_match_all(self::NAME_PATTERN, $val)) {
            $this->errorMessages[$key] = 'letters and white space allowed'; #name and surname
        }
    }

    public function validPassword($val, $key)
    {
        if (!preg_match_all(self::PASSWORD_PATTERN, $val)) {
            $this->errorMessages[$key] = "enter correct password";
        }
    }

    public function validateMatchPassword($input, $match, $key)
    {
<<<<<<< HEAD
        if ($input !== $match) {
            $this->errorMessages[$key] = "password does not mach";
=======
            if ($input !== $match) {
                $this->errorMessages[$key] = "password does not mach";
>>>>>>> 01aeb8328c9f2a1f967ee4445b6cbee81dde03f2
        }
    }

    public function emailValid($input, $key)
    {
        if (false === filter_var($input, FILTER_VALIDATE_EMAIL)) {
            $this->errorMessages[$key] = "invalid email format";
        }
    }

    public function validateChecked($val, $key)
    {
        if ($val === 0) {
            $this->errorMessages[$key] = "User agreement must be accepted";
          }
    }

    public function getErrorMessages()
    {
        return $this->errorMessages;
    }
}