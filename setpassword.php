<?php
require('dbconnect.php');
require('checkuser.php');
if(isset($_SESSION['pass'])&&($_POST['pass'])){
    $pass=$_POST['pass'];
    $email=$_SESSION['email'];
    $admission=$_SESSION['admno'];

    if($_SESSION['usertype']){
    
    $sql="insert into student_log(student_id,pass,email)values($admission,'$pass','$email')";
    $sql2="select * from student_log where student_id=$admission and email='$email'";
    $result=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result)>0)
    {
        $sql3="update student_log set pass='$pass' where student_id=$admission and email='$email'";
        if(mysqli_query($conn,$sql3)){
            $_SESSION['flag']="Password Updated Successfully";
        }
        else
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        if(mysqli_query($conn,$sql))
        $_SESSION['flag']="Password Set";
     
     }
    }
    
    elseif(!$_SESSION['usertype']){
        $sql="insert into staff_log(emp_id,password,email)values($admission,'$pass','$email')";
    $sql2="select * from staff_log where emp_id=$admission and email='$email'";
    $result=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result)>0)
    {
        $sql3="update staff_log set password='$pass' where emp_id=$admission and email='$email'";
        if(mysqli_query($conn,$sql3)){
            $_SESSION['flag']="Password Updated Successfully";
        }
        else
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        if(mysqli_query($conn,$sql))
        $_SESSION['flag']="Password Set";
     
     }

    }
}
    else
    $_SESSION['flag']="Invalid";
    header("location:setpass.php");
     mysqli_close($conn);
     
     



?>