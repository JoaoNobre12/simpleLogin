<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/login/system/system.php';

publicAccess();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
    <style type="text/css">
        *{
            margin: 10px;
        }
    </style>
</head>
<body>

<h2>Sign in</h2>
<hr>

<?php
registerValidate();
?>

<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" value="<?php echo $_POST['username']; ?>" name="username">
    <br>

    <label for="email">e-mail</label>
    <input type="text" id="email" name="mail" value="<?php echo $_POST['mail'];?>">
    <br>

    <label for="user">user </label>
    <input type="text" id="user" name="nickname" value="<?php echo $_POST['nickname'];?>">
    <br>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="password" >
    <br>
    <label for="repass">Retype Password</label>
    <input type="password" id="repass" name="confirm_password">

    <hr>
    <input type="submit" name="send" value="Sign in">
    <a href="<?php echo URL_BASE;?>" title="log in">log in</a>
</form>


</body>
</html>