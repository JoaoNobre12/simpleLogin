<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 05/06/16
 * Time: 19:54
 */
include 'config.php';
include 'helpers.php';

//register user
function registerUser($name, $mail, $nickname, $password, $status = true){
    $password = cryptPass($password);
    $userkey  = generateKey();
    $register = time();
    
    $query    = "INSERT INTO members (name, mail, username, password, userkey, register, status)";
    $query   .= "VALUES ('$name', '$mail', '$nickname', '$password', '$userkey', '$register', '$status')";

    return dbExecute($query);
}

//verify if log in exists
function userExists($nickname){
    $query = "SELECT username FROM members WHERE username = '$nickname'";
    
    $result = dbExecute($query);

    if(mysqli_num_rows($result) == 0)
        return false;
    else
        return true;

}

//verify if mail exists
function mailExists($mail){

    $query = "SELECT mail FROM members WHERE mail = '$mail'";
    //$query = "SELECT * FROM members";

    $result = dbExecute($query);
    $data = null;


    if(mysqli_num_rows($result) == 0)
        return false;
    else
        return true;
}

//db connection
function dbConnect()
{
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($link, "utf8");
    //var_dump(mysqli_query($link,"SELECT * FROM members"));
    return $link;
}

function dbClose($link)
{
    mysqli_close($link) or die(mysqli_error($link));
}

function dbExecute($query)
{
    $link = dbConnect();

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    dbClose($link);

    return $result;
}

