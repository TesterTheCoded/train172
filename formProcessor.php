<?php

require 'AccountValidation.php';
require 'Save.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$errorMessages = array();
$formValues = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    //print_r($_POST);
    $_POST["accept"] = isset($_POST["accept"]) ? $_POST["accept"] : 0;
    $validate = new AccountValidation();

    foreach($_POST as $key => $value) {
        $formValues[$key] = data($_POST[$key]);
        $validate->validateNotEmpty($formValues[$key], $key);
    }

    $validate->validateName($formValues['name'], 'name');
    $validate->validateName($formValues['surname'], 'surname');
    $validate->validPassword($formValues['pswd'], 'pswd');
    $validate->validateMatchPassword($formValues['pswd'], $formValues['confirm'], 'confirm');
    $validate->emailValid($formValues['email'], 'email');
    $validate->validateChecked($formValues['accept'], 'accept');

    $errorMessages = $validate->getErrorMessages();
}

function data($data)
{
    $data = trim($data);
    return $data;
}

if (false === empty($formValues) && true === empty($errorMessages)): ?>
    <?php echo "Welcome " . $formValues['name']. " " . "<br>Your email address is: " . $formValues['email'] . "<br>"; ?><br>
    <?php
    require 'Connection.php';
    $connection = Connetcion::getConn();
    $save = new Save($connection);
    $save->saveForm($formValues['name'],$formValues['surname'],$formValues['pswd'],$formValues['email']);