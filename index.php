<?php
include_once 'system/system.php';

publicAccess();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
        *{
            margin: 10px;
        }
    </style>
</head>
<body>

<h2>Log in</h2>
<hr>
<?php


//var_dump(generateKey());
//echo "<br>";
//var_dump(isLogged());

//echo "<br>";
//echo cryptPass("joaoLindo123");

?>
<form action="" method="post">
    <label for="name">Name <input type="text" id="name" name="username"></label>
    <br>
    <label for="pass">Password <input type="password" id="pass" name="pass"></label>
    <hr>
    <input type="submit" name="send" value="Log in">
    <a href="<?php echo URL_REGISTER?>" title="sign in">sign in</a>
</form>


</body>
</html>