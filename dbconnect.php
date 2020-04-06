<?php

$server="localhost";
$username="logger";
$pass="host123";
$dbname="logger";
$conn = mysqli_connect($server, $username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//else
//echo"conected";
//$user=$_GET['profile'];
//echo $user;

 //   $password=$_GET['password'];
    ///echo $password;


?>
