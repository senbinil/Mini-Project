<?php
session_start();
if(!isset($_SESSION['log'])){
    $_SESSION['logalert']=true;
    header("Location:adminlog.php");
}

$_SESSION['msg']="";
//ession_start();
require 'dbconnect.php';
if(isset($_POST['feelog'])){
$admno=$_POST['admission'];
$course=$_POST['cs'];
$sem=$_POST['semester'];
$amount=$_POST['amt'];
$mode=$_POST['pay'];

//checking regno
$sql="select admin_no from studentenroll where admin_no=$admno and ug_course=(select course_id from ugcourse where course_name='$course') ";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    //$message="Please vaerify the admission number";
    //exit(0);
    $row=mysqli_fetch_assoc($res);
var_dump($row);
$sqlsear="select admin_no from feelog where admin_no=$admno and semester=$sem ";
$ressear=mysqli_query($conn,$sqlsear);
if(mysqli_num_rows($ressear)>0){
    $_SESSION['msg']="<script> alert(\"Fee already paid\");</script>";   header("location:feeupdate.php");

    
}
else{
$sql2="insert into feelog(admin_no,semester,amount,payment_mode)values($admno,$sem,$amount,'$mode')";
if(mysqli_query($conn,$sql2)){
   $sql3="select payment_id from feelog where admin_no=$admno limit 1";
   $sqlup="update studentenroll set semester=$sem where admin_no=$admno" ;
   $resup=mysqli_query($conn,$sqlup);
    $res2=mysqli_query($conn,$sql3);
    if (mysqli_query($conn, $sqlup)) {
        echo "Record updated successfully";
    } 
    
    $val=mysqli_fetch_object($res2);
    $_SESSION['msg']=$val->payment_id;
    echo "New record created successfully";
    $_SESSION['msg']="<script> alert(\"Fee  paid\");</script>";
   header("location:feeupdate.php");
}
}
}
else{
$_SESSION['msg']="<script> alert(\"Info Mismatch Please verify.\");</script>";    header("location:feeupdate.php");

}
}
?>