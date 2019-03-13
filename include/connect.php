<?php
$connection =mysqli_connect('localhost','root','');
if(!$connection){
    die("database connection failed".
    mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'sup');
if(!$select_db){
    die("database selection failed".
    mysqli_error($connection));
}
?>
