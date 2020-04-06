<?php
session_start();
$_SESSION['logalert']="";
//header("Location:adminlog.php");
require('dbconnect.php');

if(isset($_GET['profile'])&& isset($_GET['password'])){
    
    $user=$_GET['profile'];
    $password=$_GET['password'];
$sql = "SELECT * FROM adminlog WHERE username='$user' AND password='$password'";
$result = $conn->query($sql);
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {\
        $_SESSION['stat']="success";
        $_SESSION['log']=1;
      //  echo "id: " . $row["admin_id"]. " - Name: " . $row["username"]. " " . $row["password"]." Email:". $row['email_id'] ."<br>";
       header("Location:adminhome.php");

    }

else {
   $_SESSION['stat'] ="username error";
   $_SESSION['log']="";
   header("Location:adminlog.php");
   
}
$conn->close();
}
if($_SESSION['logalert'])
echo "<script> alert(\"Please Login to access the Page\")</script>";
?>
