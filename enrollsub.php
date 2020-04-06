<?php
session_start();
require 'dbconnect.php';
//include('studentenroll.php');
$first_name=$_GET['fname'];
$last_name=$_GET['lname'];
$dob=$_GET['dob'];
$blood=$_GET['blood'];
$address=$_GET['address'];
$state=$_GET['state'];
$city=$_GET['city'];
$zipcode=$_GET['zipcode'];
$gender=$_GET['gender'];
$guard_fname=$_GET['gfname'];
$guard_lname=$_GET['glname'];
$relation=$_GET['relation'];
$phone=$_GET['phone'];
$ypass=$_GET['ypass'];
$roll=$_GET['roll_no'];
$pcat=$_GET['prevcat'];
$ugcourse=$_GET['ug_course'];
$email=$_GET['email_id'];
echo $gender;
//echo $dob;


$sql="insert into studentenroll(fname,lname,dob,blood_group,address,state,city,zip_code,gender,guard_fname,guard_lname,relation,gphone,year_pass,exroll_no,e_mail,prevcourse)values('$first_name','$last_name',STR_TO_DATE('$dob', '%d/%m/%Y'),'$blood','$address','$state','$city','$zipcode','$gender','$guard_fname','$guard_lname','$relation','$phone','$ypass','$roll','$email','$pcat')";
$sqlc="update studentenroll set ug_course=(select course_id from ugcourse where course_name='$ugcourse') where exroll_no='$roll'";
$sqlad="select admin_no from studentenroll where exroll_no=$roll";
/*$id=123;
$name="binil";
$phone=1223322;$sql="insert into sample(id,name,phone)values('$id','$name','$phone')";*/

if($conn->query($sql)===true && $conn->query($sqlc)===true ){
    $result=$conn->query($sqlad);
    $row=$result->fetch_assoc();
   
   header("location:studentenroll.php");
   $_SESSION['status']= "<script> alert(\"Your Admission Number is:".$row["admin_no"]."\");</script>";
}
else
{
    echo"Error:".$sql."<br>".$conn->error;
}

$conn->close();


?> 



