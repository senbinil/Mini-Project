<?php
session_start();
require('dbconnect.php');
if(isset($_POST['admno']) && isset($_POST['phone'])){
$adno=$_POST['admno'];$number=$_POST['phone'];
$_SESSION['admno']=$_POST['admno'];
$sql="select * from studentenroll where admin_no=$adno and gphone=$number";
$sqlemp="select * from staffenroll where emp_id=$adno and mobile=$number";
$res2=mysqli_query($conn,$sqlemp);
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $_SESSION['pass']=true;
    $_SESSION['usertype']=true;
    $_SESSION['disable']=true;
    $_SESSION['alertlog']="User found please set your new password";
    $row=mysqli_fetch_assoc($result);
    $_SESSION['email']=$row['e_mail'];
    header("Location:setpass.php");
    exit();
}
else
{   if(mysqli_num_rows($res2)>0){
    $_SESSION['pass']=true;
    $_SESSION['disable']=true;

    $_SESSION['usertype']=false;
    $_SESSION['alertlog']="User found please set your new password";
    $row=mysqli_fetch_assoc($res2);
    $_SESSION['email']=$row['email'];
    header("Location:setpass.php");
    exit();
}  
    
    
 else{   
    $_SESSION['pass']=false;
    $_SESSION['alertlog']="User not  Found!!";
    header("Location:setpass.php");
    exit();
}

}
}

//$_SESSION['alertlog']="Invalid Fields";


?>