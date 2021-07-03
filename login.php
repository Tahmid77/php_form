<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post">
    
        <fieldset>
        <Legend><h1>Login</h1></Legend>
        <table>
              <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username" required></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password" required></td>
              </tr>
              <tr colspan="3">
                  <td colspan="3"><hr></td>
              </tr>
              <tr>
                <td><input type="checkbox">Remember me</td>
                  
              </tr>
              <tr>
                    <td><input type="submit" name="signup"  /></td>
                    <td>
                    <a href="login.php">Forgot Password?</a>
                    </td>
              </tr>
            </table>
        </fieldset>
        </form>
</body>
</html>