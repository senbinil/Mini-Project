<?php
session_start();
require('dbconnect.php');
if(!$_SESSION['userlogin'])
header("location:exlog.htm");
$sql="select * from studentenroll where admin_no=".$_SESSION['admission'];
$query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['fname']." ".$row['lname'];?></title>
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style>
       @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }
        header{
            font-size: 50px;
            background-color: #2A293E;
            width: 100%;
            height: 100px;
        }
        body{
        background:url('img/profile.png') ;
       font-family: 'Montserrat',sans-serif;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
      
      
   }
        .username{
            font-size: x-large;
        }
        header,nav{
            position: relative;
          
        }
        footer{
            background-color: #3f3d5c;

        }
        .footer-copyright{
            background-color: #2a293e;;
        }
        fieldset{
            border: 2px solid black;
        }
       label{
           font-size: large;
       }
    
    </style>
</head>
<body>
   <header class="text-white ">
      <span class="px-5"><i class=" mx-1 fa fa-user"></i>Profile </span>
   </header> 
   <nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item username dropdown active  bg-light mx-4 my-1">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user mx-2"></i><span><?php echo $row['fname']." ".$row['lname'];?></span> </a>
                <div class="dropdown-menu">
                 
                        <a href="pologout.php" class="dropdown-item">Logout</a>
                    
                </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid my-5 py-3 cont  text-white">
<h3 class="my-3">Basic Details</h3>
<hr>
<div class="row pl-2">
    <div class="col-sm-8">
        <?php
        $adm=$row['admin_no'];
    $sqlcs="select course_name , no_sem from ugcourse where course_id=(select ug_course from studentenroll where admin_no=$adm)";
    $res=mysqli_query($conn,$sqlcs);
    $rows=mysqli_fetch_assoc($res);

?>
        <div class="row">
            <label for="name" class="col-sm-4">Admission Number:</label> <span class="col-sm-4"><?php echo $row['admin_no'];?></span>
           
              </div>
        
        <div class="row">
      <label for="name" class="col-sm-2">First Name:</label> <span class="col-sm-2"><?php echo $row['fname'];?></span>
      <label for="name" class="col-sm-2">Last Name:</label> <span class="col-sm-2"><?php echo $row['lname'];?></span>
        </div>
        <div class="row">
            <label for="" class="col-sm-2 col-form-label">Email-ID:</label> 
            <span class="col-sm-4 col-form-label"><?php echo $row['e_mail'];?></span></div>
            <div class="row"> <label for="" class="col-sm-2 col-form-label">Phone :</label> 
            <span class="col-sm-2 col-form-label"><?php echo $row['gphone'];?></span></div>
           
              
              <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">Course opted:</label>
              <span class="col-sm-2 col-form-label"><?php  echo $rows['course_name']; ?></span>
              <label for="" class="col-sm-2 col-form-label">Course Duration:</label>
              <span class="col-sm-2 col-form-label"><?php echo $rows['no_sem']." "."Semester";?></span>
              </div>
              <div class="row alert alert-dark" role="alert">
                <h5>Note:</h5>
                <p class="text-danger mx-5"><?php echo $row['remark']; ?></p>
            </div>
            <hr>
              <div class="row">
                  <h3>Course details</h3>
              </div>
            
        <div class="row">
              <!--Section: Content-->
  <section class="white-text grey p-5 rounded">
    
    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0 mx-3">
            <h4 class="display-4 text-right mb-0 count-up" data-from="0" data-to="42" data-time="2000"><?php echo $row['semester'];?></h4>
          </div>

          <div class="col-md-6">
            <p class="text-uppercase font-weight-normal mb-1">Semester</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0 mx-3">
            <h4 class="display-4 text-right mb-0 count1"></h4>
          </div>

          <div class="col-6">
            <p class="text-uppercase font-weight-normal mb-1"></p>
          </div>
        </div>
      </div>
<?php
$sem=$row['semester'];
$adm=$row['admin_no'];
$sql="select * from feelog where admin_no=$adm and semester=$sem";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
$payment=true;
else
$payment=false;


?>
      <div class="col-md-4 mb-4">
        <div class="row">
          <div class="col-6 pr-0 mx-3">
            <h4 class="display-4 text-right"><span class="d-flex justify-content-end"><span class="count2"><?php if($payment)echo "Paid"; else
            echo "Pending";?></span> </span></h4>
          </div>

          <div class="col-6">
            <p class="text-uppercase font-weight-normal mb-1">Fee</p>
            <p class="mb-0"><i class="fa fa-smile fa-2x mb-0"></i></p>
          </div>
        </div>
      </div>

    </div>

  </section>

    </div>

</div>
<!---<div class="col-sm-4  rightmen">
    <h3 class=" text-white" align="center">Info center</h3>
    <div class="content mx-2">
    <span><i class="fa fa-thumb-tack"></i></span>
    <span><a href="#">Fee Payment details</a></span><br>
       
    </div>
    </fieldset>
</div>
</div>
</div>-->

</body>
</html>

<?php


mysqli_close($conn);

?>