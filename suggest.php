<?php
session_start();
require('dbconnect.php');
if(isset($_POST['emailid'])&& isset($_POST['msg'])==true){
    $mail=$_POST['emailid'];
    $msg=$_POST['msg'];
$sql="insert into suggest(email_id,content)values('$mail','$msg')";
if($conn->query($sql)==true){
    $_SESSION['alert']="<script>alert(\"Thank you\");</script>";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
else
{
    header("location:about.php");

}
}
else{
header("location:about.php");
}

?>