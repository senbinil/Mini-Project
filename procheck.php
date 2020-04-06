<?php
session_start();
$_SESSION['userlogin']="test";
require('dbconnect.php');
if(isset($_POST['proname'])&& isset($_POST['propass'])){
$username=$_POST['proname'];
$password=$_POST['propass'];
$sql="select student_id  from student_log where student_id=$username and pass='$password'";
$result=mysqli_query($conn,$sql);
$sqlemp="select emp_id from staff_log where emp_id=$username and password='$password' ";
    $res=mysqli_query($conn,$sqlemp);
    var_dump($res);
if(mysqli_num_rows($result)>0){
    $_SESSION['admission']=$username;
    $_SESSION['userlogin']=true;
    header("location:profile.php");
}
elseif(mysqli_num_rows($res)>0){

    $_SESSION['admission']=$username;
    $_SESSION['userlogin']=true;
    header("location:staffpro.php");

}
else
{
    $_SESSION['userlogin']=false;
   header("location:exlog.php");exit();
}   

}
else{
    exit();
}


mysqli_close($conn);
/*/{
   
}
*/?>