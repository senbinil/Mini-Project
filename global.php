<?php
session_start();

$_SESSION['logalert']=false;
if(!isset($_SESSION['log'])){
    $_SESSION['logalert']=true;
    header("Location:adminlog.php");
}
if(isset($_SESSION['update']))
echo $_SESSION['update'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Global Search</title>
    <style>
          header{
           position: sticky;
           font-size: 45px;
           width: 100%;
           padding-left: 1.5rem;
           line-height: 1.5;
           font-weight: 500;
           background-image: -webkit-linear-gradient(right,black, white);
           color:black;
           padding: 35px 22px;
   
        }
        .vl
        {
            border-left:6px solid black;
            height: 200px;
        }
        @media only screen and (max-width:600px){
            .vl{
                display: none;
            }
        }
        body{
            font-family: 'Montserrat',sans-serif;
        }
    </style>
</head>
<body>
    <header class="container-fluid">
        <span class="hash"><i class="fa fa-search" aria-hidden="true"></i>
        </span>Dashboard
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-tarPOST="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item  btn btn-info mx-2 my-1">
                        <a class="nav-link text-white" href="adminhome.php">Dashboard Home</a>
                    </li>
                    <li class="nav-item btn btn-info  mx-2 my-1">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr class="my-4">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 align="center" class="my-3">Search Student</h5>
                        <hr>
                        <form action="#" align="center" method="POST" >
                            <div class="row">
                                <label for="" class="col-sm-3 col-form-label">Admission Number:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="admn" required>
                                </div>
                            </div>
                            <input type="submit" value="Check" name="stud" class=" mx-5 my-4 btn btn-danger">
                        </form>
                </div>
                <div class="vl"></div>
                <div class="col-sm-5">
                    <h5 align="center" class="my-3">Search for Employee</h5>
                    <hr>
                    <form action="#" align="center" method="POST">
                        <div class="row">
                            <label for="" class="col-sm-3 col-form-label">Employee UID:</label>
                            <div class="col-sm-4">
                                <input type="text" name="eid" class="form-control" required>
                            </div>
                        </div>
                        <input type="submit" value="Check" name="emp" class=" mx-5 my-4 btn btn-danger">
                    </form>
                </div>
            </div>
            
        </div>
        <hr class="my-2">
        <div class="contentx ">
           
            <?php
        
if(isset($_POST['stud'])){
    $_SESSION['admin']=$_POST['admn'];
    include('stud.php');
   

}
if(isset($_POST['emp'])){
    $_SESSION['empid']=$_POST['eid'];
    include('emp.php');
}

if(isset($_SESSION['update']))
unset($_SESSION['update']);

?>
        </div>
    </div>
</body>
</html>