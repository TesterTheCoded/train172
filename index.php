<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body>

    <form action="formProcessor.php" method="post">
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
</body>
</html>
