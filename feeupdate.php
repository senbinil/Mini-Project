<?php
session_start();
/*if(!isset($_SESSION['log'])){
    $_SESSION['logalert']=true;
    header("Location:adminlog.php");
}

$_SESSION['msg']="";
//ession_start();
require 'dbconnect.php';
if(!empty($_GET['admno'])&&!empty($_GET['course'])&&!empty($_GET['sem'])&&!empty($_GET['amount'])&&!empty($_GET['mode'])){
$admno=$_GET['admno'];
$course=$_GET['course'];
$sem=$_GET['sem'];
$amount=$_GET['amount'];
$mode=$_GET['mode'];

//checking regno
$sql="select admin_no from studentenroll where admin_no=$admno";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    //$message="Please vaerify the admission number";
    //exit(0);
    $row=mysqli_fetch_assoc($res);
var_dump($row);
$sqlsear="select admin_no from feelog where admin_no=$admno";
$ressear=mysqli_query($conn,$sqlsear);
if(mysqli_num_rows($ressear)>0){
    $_SESSION['msg']="Fee already paid";  //  header("location:feeupdate.php");

    
}
else{


$sql2="insert into feelog(admin_no,semester,amount,payment_mode)values($admno,$sem,$amount,'$mode')";
if(mysqli_query($conn,$sql2)){
   $sql3="select payment_id from feelog where admin_no=$admno limit 1";
    $res2=mysqli_query($conn,$sql3);
    $val=mysqli_fetch_object($res2);
    $_SESSION['msg']=$val->admin_no;
    echo "New record created successfully";
    $_SESSION['msg']="inserted";
    //header("location:feeupdate.php");
}}
}
else
$_SESSION['msg']="admo error";

*/
if(isset($_SESSION['msg']))
echo $_SESSION['msg'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
 html{
         height: 100%;
         margin: 0;
     }
     select,input{
         text-align: center;
     }
     header{
        position: sticky;;
        font-size: 45px;
        width: 100%;
        padding-left: 1.5rem;
        line-height: 1.5;
        font-weight: 500;
        background-image: -webkit-linear-gradient(right, #3931af, #00c6ff);
        color: white;
        padding: 35px 22px;

     }
     body{
         font-family: 'Montserrat',sans-serif;
         height: 100%;
         min-height: 100%;
         
  
     }
   
    </style>

    <link rel="stylesheet" href="/jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <span class="hash"><i class="fa fa-dashcube" aria-hidden="true"></i>
        </span>Dashboard
    </header>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item  btn btn-danger mx-2 my-1">
                        <a class="nav-link text-white" href="adminhome.php">Dashboard Home</a>
                    </li>
                    <li class="nav-item btn btn-danger  mx-2 my-1">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br>


    <div class="container ">
        <fieldset>
        <legend><h3>Fee Entry</h3>
        </legend>
        
        <center>
            <form action="feesub.php" method="post" class="mt-4">
                <div class="form-group row ">
                    <label for="" class="col-sm-4 col-form-label">Admission Number</label>
                    <div class="col-sm-4">
                        <input type="text" name="admno" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Course</label>
                    <div class="col-sm-4">
                        <select name="course" class="form-control" id="">
                            <option value="init" selected disabled>Select Course</option>
                            <option value="Bsc Computer Science">Bsc Computer Science</option>
                            <option value="Bachelor of Computer Application">Bachelor of Computer Application</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Semester</label>
                    <div class="col-sm-4">
                     <select name="sem"  class="form-control" id="">
                         <option value="init" selected disabled>Select Semester</option>
                         <option value="1">Semester 1</option>
                         <option value="2">Semester 2</option>
                     </select>
                    </div>
                </div>
             
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-4">
                    <select name="amount" class="form-control" id="">
                        <option value="15750">15750</option>
                        <option value="16750">16750</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Paid</label>
                    <div class="col-sm-4">
                        <select name="mode" class="form-control" id="">
                            <option value="cash">By Cash</option>
                        </select>
                        </div>
                </div>
                    <div class="form-group">
                        <input type="submit" name="log" class=" btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-primary">
                    </div>
                
            </form>
           
        </center>
    </fieldset>
    </div>
</body>
</html>
<?php
if(isset($_SESSION['msg']))
unset($_SESSION['msg']);

?>