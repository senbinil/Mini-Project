<?php
session_start();
require('dbconnect.php');
if(isset($_POST['log'])){
   $msg=$_POST['msg'];
   $sem=$_POST['semester'];
   $sql="update studentenroll set remark='$msg' where semester=$sem";
    if(mysqli_query($conn,$sql)){
        $_SESSION['msgstat']= "<script>alert(\"Published !\");</script>";
        header("location:msgcenter.php");
        exit();

    }
    else
    echo "Error updating record: " . mysqli_error($conn);
}
else
echo "Error updating record: " . mysqli_error($conn);


mysqli_close($conn);

?>