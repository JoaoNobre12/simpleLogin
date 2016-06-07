<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 05/06/16
 * Time: 18:43
 *
 * here is db's login, pass and name. If you need to change, change here
 */

define('HOSTNAME','localhost'); //defines a constant
define('PASSWORD','215464root'); //this isn't my facebook pass -.-
define('DATABASE','panel');
define('USERNAME','root');

//URL's
define('URL_BASE', 'http://localhost/login/');
define('URL_REGISTER', URL_BASE.'pages/register.php');
define('URL_PANEL', URL_BASE.'pages/panel.php');


// DIR's
define('DIR_BASE',$_SERVER['DOCUMENT_ROOT'].'/login/');
define('DIR_SYSTEM',DIR_BASE.'system/'); //echo DIR_SYSTEM; //just for debug

//FILES
define('FILE_CONFIG', DIR_SYSTEM.'config.php'); //echo  FILE_CONFIG;
define('FILE_HELPERS', DIR_SYSTEM.'helpers.php');
define('FILE_DATABASE', DIR_SYSTEM.'database.php');// echo  FILE_DATABASE;