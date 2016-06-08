<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 05/06/16
 * Time: 19:55
 */
include 'database.php';

startSystem();

//validate register form
function registerValidate(){
   //var_dump($_POST); //debug

    if (!!getPost('send')) {
        $message = null;

        $name = getPost('username');
        $mail = getPost('mail');
        $nick = getPost('nickname');
        $pass = getPost('password');
        $confirm_pass = getPost('confirm_password');

        if (empty($name))
            $message = "Type your name!";
        else if (empty($mail))
            $message = "Type your e-mail!";
        else if (!filter_var($mail,FILTER_VALIDATE_EMAIL)){ // validate email
            $message = "Type a valid e-mail!";
        }
        else if (empty($nick))
            $message = "Type your nickname!";
        else if (empty($pass))
            $message = "Type your password!";
        else if ($pass != $confirm_pass)
            $message = "Passwords do not match!";

        else{
            if(mailExists($mail) == true)
                $message = "This e-mail already exists!";
            else if (userExists($nick) == true)
                $message = "This username is already in use!";

            else{
                $register = registerUser($name, $mail, $nick, $pass);

                if (!$register)
                    $message = "Sorry, something wrong is happening...";
                else{
                    $message = "you are registered! :')";


                }

            }

        }
        echo ($message) ? $message."<hr/>" : null;
    }
}

//start system
function startSystem(){
    session_start();
}