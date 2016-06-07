<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 05/06/16
 * Time: 19:54
 */
include 'config.php';
include 'helpers.php';



//db connection
function dbConnect(){
    $link = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($link,"utf8");
    //var_dump(mysqli_query($link,"SELECT * FROM members"));
    return $link;
}

function dbClose($link){
    mysqli_close($link) or die(mysqli_error($link));
}

