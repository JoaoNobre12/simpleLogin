<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 05/06/16
 * Time: 19:53
 */


/*=================================================================================*/
                            //controls access
//private access
function privateAccess(){
    if(!isLogged())
        redirect(URL_BASE);
}

//public access
function publicAccess(){
    if(isLogged())
        redirect(URL_PANEL);
}
/*=================================================================================*/


/*=================================================================================*/
                            //Session
//verifies log in
function isLogged(){
    if (isset($_SESSION['userLog']) || empty($_SESSION['userLog']))
        return false;
    else
        return true;
}

//sets or gets USER LOG
function userLog($value = null){
    if ($value === null)
        return $_SESSION['userLog'];
    else
        $_SESSION['userLog'] = $value;

}
/*=================================================================================*/


//encrypt pass
function cryptPass($pass){
    return sha1($pass);
}

//generate userkey, unique for user (sha1 is a unique hand encryptor)
function generateKey(){
    return sha1(rand().time());
}

//get POST
function getPost($key = null){
    if($key == null){
        return $_POST;
    }
    else
        return (isset($_POST[$key])) ? dbEscape($_POST[$key]) : false;
}
//clear string, for prevent sql injection
function dbEscape($str){
    $link = dbConnect();
    if(is_array($str)){
        $arr = $str;
        foreach ($arr as $key => $value){
            $key = mysqli_real_escape_string($link, $key);
            $value = mysqli_real_escape_string($link, $value);

            $str[$key] = $value;
        }
    }else{
        $str = mysqli_real_escape_string($link, $str);
    }
    dbClose($link);
    return $str;
}

//redirect
function redirect($url){
    header("Location: ".$url);

    die();
}