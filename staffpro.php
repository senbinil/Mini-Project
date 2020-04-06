<?php
session_start();
if(!$_SESSION['userlogin'])
header("location:index.php");
require('dbconnect.php');
$emp_id=$_SESSION['admission'];
$sql="select * from staffenroll where emp_id=$emp_id ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        body{
            font-family: 'Montserrat',sans-serif;
        }
        header{
            width: 100%;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <header class="px-3 text-white py-4 bg-dark">
        <h2 class="display-4">Profile</h2>
    </header>
    <nav class="navbar  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item username dropdown active  bg-light mx-4 my-1">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user mx-2"></i><span><?php echo $row['emp_name'];?></span> </a>
                    <div class="dropdown-menu">
                        <
                            <a href="pologout.php" class="dropdown-item">Logout</a>
                        
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="content">
        <div class="container">
            <h4 class="my-3">Profile Info:</h4>
            <hr>
            <div class="row">
                <label for="" class="col-sm-2 col-form-label">Employee ID:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['emp_id'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Name:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['emp_name'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Mobile:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['mobile'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Email:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['email'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Address:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['caddress'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Proffession:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['pro'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Education:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['education'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Employee type:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['emp_type'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Designation:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['desig'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Joining Date:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['j_date'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Salary:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['salary'];?></label>
            </div>
            <hr>
            <h5 class="mb-3">Account Details</h5>
            <div class="row">
                <label for="" class="col-sm-2 col-form-label">Account No:</label>
                <label for="" class="col-sm-2 col-form-label"><?php echo $row['acc_no'];?></label>
                <label for="" class="col-sm-2 col-form-label">Bank Name:</label>
                <label for="" class="col-sm-2 col-form-label"><?php echo $row['bank_name'];?></label>
                <label for="" class="col-sm-2 col-form-label">IFSC:</label>
                <label for="" class="col-sm-2 col-form-label"><?php echo $row['ifsc'];?></label>
            </div>
            <hr>
            <?php
            $sql2="select pay_id ,sal,month,yrs,pay_time from sallog where emp_id=$emp_id order by pay_time desc limit 1";
            $result=mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result)>0)
            $rows=mysqli_fetch_assoc($result);
            $sqlfull="select * from sallog where emp_id=$emp_id limit 10 ";
            $res2=mysqli_query($conn,$sqlfull);
            
?>
            <h5 class="my-3">Salary Credited Details</h5>
            <div class="row">
                <label for="" class="col-form-label col-sm-3">Last Salary credited details:</label>
                <label for="" class="col-sm-5 bg-info text-white"><?php if(isset($rows)){ echo $rows['pay_id']." ".$rows['month']." "." ". $rows['pay_time'];} else echo "";?></label>
            </div>
            <div class="row my-3 bg-dark text-white">
            
                    <label for="" class="col-sm-3">Payment Id</label>
                    <label for="" class="col-sm-3"> Salary</label>
                    <label for="" class="col-sm-3">Month</label>
                    <label for="" class="col-sm-3">Payment Time</label>

    </div>
<?php

if(mysqli_num_rows($res2)>0)
            {
                while($row2=mysqli_fetch_assoc($res2)){
                    echo "<div class =\"row my-2\"><span class=\"col-sm-3\">".$row2['pay_id']."</span>"."<span class=\"col-sm-3\">".$row2['sal']."</span>"."<span class=\"col-sm-3\">".$row2['month']."</span>"."<span class=\"col-sm-3\">".$row2['pay_time']."</span></div>";
                }
            }
            else
            echo "None";



?>
               
        </div>
    </div>
</body>
</html>