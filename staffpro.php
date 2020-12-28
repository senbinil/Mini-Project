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
    <title><?php echo $row['emp_name'];?></title>
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style>
         @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }
        body{
            font-family: 'Montserrat',sans-serif;
        }
        header{
            width: 100%;
        }
    </style>
   
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
                            <a href="pologout.php" class="dropdown-item">Logout</a>
                        
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="content">
        <div class="container bg-secondary text-white">
            <h4 class="my-3 pt-4">Profile Info:</h4>
            <hr>
            <div class="row ">
                <label for="" class="col-sm-2 col-form-label">Employee ID:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['emp_id'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Name:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['emp_name'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Mobile:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['mobile'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Email:</label>
                 <label for="" class="col-md-2 col-form-label"><?php echo $row['email'];?></label>
                 </div>
                 <div class="row ">
                 <label for="" class="col-sm-2 col-form-label">Address:</label>
                 <label for="" class="col-sm-2 col-form-label"><?php echo $row['caddress'];?></label>
                 <label for="" class="col-sm-2 col-form-label">Profession:</label>
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
            <div class="row container">
                <label for="" class="col-form-label col-sm-3">Last Salary credited details:</label>
                <label for="" class="col-sm-5 bg-info text-white"><?php if(isset($rows)){ echo $rows['pay_id']." ".$rows['month']." "." ". $rows['pay_time'];} else echo "";?></label>
            </div>
            <div class=" my-3 table-responsive">
            
                    <table class="table">
                    <thead class="bg-light text-black">
                    <tr>
                    <th  scope="col">Payment Id</th>
                    <th scope="col"> Salary</th>
                    <th scope="col">Month</th>
                    <th scope="col">Payment Time</th>
                    </tr>
                    </thead>
                    <tbody class="text-white">
                    <?php

if(mysqli_num_rows($res2)>0)
            {
                while($row2=mysqli_fetch_assoc($res2)){
                    echo "<tr><th scope=\"row\">".$row2['pay_id']."</th>"."<td>".$row2['sal']."</td>"."<td>".$row2['month']."</td>"."<td>".$row2['pay_time']."</td></tr>";
                }
            }
            else
            echo "None";



?>     
                    </tbody>
                    </table>

    </div>
  
        </div>
    </div>
</body>
</html>