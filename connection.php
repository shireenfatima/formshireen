<?php
$url = '127.0.0.1:3306';
$user = 'root';
$pass = '';
$conn = mysqli_connect($url, $user, $pass, "shireen");
if(!$conn){
    die('Could not connect : '.mysql_error());
}
?>

