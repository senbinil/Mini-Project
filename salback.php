<?php
session_start();
require('dbconnect.php');
echo $_SESSION['name'];
if($_POST['pay']){
    $emp=$_SESSION['name'];
    $sal=$_POST['salary'];
    $mon=$_POST['month'];
    $yr=$_POST['yrs'];
    $acc=$_POST['acc_no'];
    $if=$_POST['ifsc'];
    $name=$_POST['empname'];
    $sql3="select emp_id from sallog where emp_id=$emp and month='$mon' and yrs=$yr";
    $result=mysqli_query($conn,$sql3);
    echo $sql3;
    if(mysqli_num_rows($result)>0){
        $_SESSION['salstat']="<script>alert(\"Payment Exist \");</script>";
        header("location:staffsal.php");
    }
    else{
        $sql2="insert into sallog(emp_id,name,acc_no,ifsc,sal,month,yrs)values($emp,'$name',$acc,'$if',$sal,'$mon',$yr)";
        echo $sql2;
        if(mysqli_query($conn,$sql2)){
            echo 'Inserted';
            $_SESSION['salstat']="<script>alert(\"Payment Successfull !\");</script>";
            header("location:staffsal.php");

        }
        
    }
}






?>