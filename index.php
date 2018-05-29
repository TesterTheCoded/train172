<?php
/**
 * Created by PhpStorm.
 * User: weronikakrzynowek
 * Date: 28.05.18
 * Time: 11:45
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

$errorMessages = array();
$formValues = [];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    //print_r($_POST);

 foreach($_POST as $key => $value)
    {
        $formValues[$key] = data($_POST[$key]);
        if(empty($formValues[$key])){
            $errorMessages[$key]="enter require data";
        }
    }
    if(!isset($errorMessages['pswd'])){
if(!preg_match_all('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $formValues['pswd'])) {
    $errorMessages['pswd']="enter correct data";
}
}

if(!isset($errorMessages['confirm'])){
     if($formValues['pswd']!==$formValues['confirm']){
         $errorMessages['confirm']="password does not mach";

     }
}

if(!isset($errorMessages['email'])){
     if(!filter_var($formValues['email'], FILTER_VALIDATE_EMAIL)){
         $errorMessages['email']="invalid email format";

     }
}



    $formValues['accept'] = isset($_POST["accept"]) ? $_POST['accept'] : 0;

 if  ($formValues['accept']  === 0) {
    $errorMessages['accept']="User agreement must be accepted";
 }


}

function data($data){
    $data = trim($data);
    return $data;
}


?>
<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body>

<?php if (false === empty($formValues) && true === empty($errorMessages)): ?>
    <?php echo "Welcome " . $formValues['name']. " " . "<br>Your email address is: " . $formValues['email'] . "<br>"; ?>
<?php else: ?>
<form action="index.php" method="post">
    <table width="550px">
        <tr>
            <td valign="top">
                <label>Imię:</label>
            </td>
            <td valign="top">
                <input type="text" name="name"  value="<?php if (true === isset($formValues['name'])): ?><?php echo $formValues['name']; ?><?php endif; ?>"><br>
                <?php if (true === isset($errorMessages['name'])): ?><?php echo $errorMessages['name']; ?><?php endif; ?><br>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label> Nazwisko:</label>
            </td>
            <td valign="top">
                <input type="text" name="surname" value="<?php if (true === isset($formValues['surname'])): ?><?php echo $formValues['surname']; ?><?php endif; ?>"><br>
                <?php if (true === isset($errorMessages['surname'])): ?><?php echo $errorMessages['surname']; ?><?php endif; ?><br>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label>Hasło:</label>
            </td>
            <td valign="top">
                <input type="text" name="pswd" value="<?php if (true === isset($formValues['pswd'])): ?><?php echo $formValues['pswd']; ?><?php endif; ?>"><br>
                <?php if (true === isset($errorMessages['pswd'])): ?><?php echo $errorMessages['pswd']; ?><?php endif; ?><br>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label>Potwierdź hasło:</label>
            </td>
            <td valign="top">
                <input type="text" name="confirm" value="<?php if (true === isset($formValues['confirm'])): ?><?php echo $formValues['confirm']; ?><?php endif; ?>"><br>
                <?php if (true === isset($errorMessages['confirm'])): ?><?php echo $errorMessages['confirm']; ?><?php endif; ?><br>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label>E-mail:</label>
            </td>
            <td valign="top">
                <input type="text" name="email" value="<?php if (true === isset($formValues['email'])): ?><?php echo $formValues['email']; ?><?php endif; ?>"><br>
                <?php if (true === isset($errorMessages['email'])): ?><?php echo $errorMessages['email']; ?><?php endif; ?><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label>Akceptuję regulamin sklepu</label>
            </td>
            <td valign="top">
                <input type="checkbox" name="accept" value="1"><br>
                <?php if (true === isset($errorMessages['accept'])): ?><?php echo $errorMessages['accept']; ?><?php endif; ?><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
</form>
<?php endif; ?>
</body>
</html>
