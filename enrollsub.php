<?php
session_start();
require 'dbconnect.php';
//include('studentenroll.php');
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$dob=$_POST['dob'];
$blood=$_POST['blood'];
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$gender=$_POST['gender'];
$guard_fname=$_POST['gfname'];
$guard_lname=$_POST['glname'];
$relation=$_POST['relationship'];
$phone=$_POST['phone'];
$ypass=$_POST['ypass'];
$roll=$_POST['roll_no'];
$pcat=$_POST['prevcat'];
$ugcourse=$_POST['ug_course'];
$email=$_POST['email_id'];


$sql="insert into studentenroll(fname,lname,dob,blood_group,address,state,city,zip_code,gender,guard_fname,guard_lname,relation,gphone,year_pass,exroll_no,e_mail,prevcourse)values
('$first_name','$last_name',STR_TO_DATE('$dob', '%d/%m/%Y'),'$blood','$address','$state','$city','$zipcode','$gender','$guard_fname','$guard_lname','$relation','$phone','$ypass','$roll','$email','$pcat')";
$sqlc="update studentenroll set ug_course=(select course_id from ugcourse where course_name='$ugcourse') where exroll_no='$roll'";
$sqlad="select admin_no from studentenroll where exroll_no=$roll";
if($conn->query($sql)===true && $conn->query($sqlc)===true ){
    $result=$conn->query($sqlad);
    $row=$result->fetch_assoc();
   

  header("location:studentenroll.php");
  $_SESSION['status']= "<script> alert(\"Your Admission Number is:".$row["admin_no"]."\");</script>";
}
else
{
    echo"Error:".$sql."<br>".$conn->error;
    header("location:studentenroll.php");

}

$conn->close();

?> 



