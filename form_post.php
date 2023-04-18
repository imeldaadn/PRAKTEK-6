<!DOCTYPE html>
<html>
    <head>
        <title>FORM LOGIN</title>
    </head>
    <body>
        <form method="POST" action="form_hasil.php">
            <table width="400" align="center" cellpadding="2" cellspacing ="2">
                <tr>
                    <td width="130">Name</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width="130">Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnLogin" value="Login">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>