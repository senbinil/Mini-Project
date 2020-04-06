<?php
session_start();
require('dbconnect.php');
if(isset($_POST['logsub'])){
$app_no=$_POST['app_no'];
$frm_no=$_POST['frm_no'];
$app_date=$_POST['app_date'];
$emp_name=$_POST['emp_name'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$nation=$_POST['nation'];
$cat=$_POST['cat'];
$mart=$_POST['martial'];
$exp=$_POST['exp'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$blod=$_POST['blod'];
$cadd=$_POST['caddress'];
$padd=$_POST['paddress'];
$proffessional=$_POST['pro'];
$education=$_POST['edu'];
$spec=$_POST['spec'];
$emp_type=$_POST['emp_type'];
$desig=$_POST['desig'];
$join=$_POST['j_date'];
$shift=$_POST['shift'];
$salary=$_POST['salary'];
$acc=$_POST['acc_no'];
$bname=$_POST['bank_name'];
$ifsc=$_POST['ifsc'];
////$sqlcheck="select emp_id where app_no=$app_no and apply_date='$app_date'";
//$result=mysqli_query($conn,$sql);
////if(mysqli_num_rows($result)>0)
//$_SESSION['staffappoint']="<script> alert(\"User Exist !\");</script>";
//else

$sql="insert into staffenroll(app_no,frm_no,apply_date,emp_name,dob,gender,nationality,cat,martial,exp,mobile,email,blod,caddress,paddress,pro,education,spec,emp_type,desig,j_date,shift,salary,acc_no,bank_name,ifsc) values($app_no,$frm_no,'$app_date','$emp_name','$dob','$gen','$nation','$cat','$mart','$exp','$mob','$email','$blod','$cadd','$padd','$proffessional','$education','$spec','$emp_type','$desig','$join','$shift',$salary,$acc,'$bname','$ifsc')";
if(mysqli_query($conn,$sql)){
    //0echo "Inserted";
    $sqlemp_id="select emp_id from staffenroll where app_no=$app_no and apply_date='$app_date'";
    $res=mysqli_query($conn,$sqlemp_id);
    $row=mysqli_fetch_assoc($res);
    $aftemp=$row['emp_id'];
header("location:staffenroll.php");
$_SESSION['staff']="<script>confirm(\"Submission Successfull .Please note down the employee Id for reference.EMPLOYEE ID:$aftemp\");</script>";

}
else{
   // header("location:staffenroll.php");
   $_SESSION['staff']="<script> alert(\"User Exist !\");</script>";

echo "error".$sql."<br>".mysqli_error($conn);
}
}
mysqli_close($conn);





?>