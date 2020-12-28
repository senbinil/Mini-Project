<?php
session_start();
require('dbconnect.php');
if(isset($_POST['logbu'])){
    $id=$_POST['msgid'];
    $sql="select msg from bulletin where msg_id=$id";
    $sqldel="delete from bulletin where msg_id=$id";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
    if(mysqli_query($conn,$sqldel)){
        $_SESSION['delstat']="<script> alert(\"Message deleted\");</script>";
        header("location:bulletin.php");
        exit();
    }
    else{
            $_SESSION['delstat']="<script> alert(\"Failed to delete\");</script>";
        header("location:bulletin.php");
            //echo "Error deleting record: " . mysqli_error($conn);


    }
}
else
{
    
    $_SESSION['delstat']="<script> alert(\"Wrong  Message ID\");</script>";
    header("location:bulletin.php");
}
   // $_SESSION['delstat']="<script> alert(\"Failed to delete\");</script>";

}
else
$_SESSION['delstat']="<script> alert(\"Invalid  input\");</script>";



?>