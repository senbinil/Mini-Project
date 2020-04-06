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
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        header{
            font-size: 50px;
            background-color: #2A293E;
            width: 100%;
            height: 100px;
        }
        body{
       
       font-family: 'Montserrat',sans-serif;
       background-image: url("img/profile.png");
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

<div class="container-fluid my-5 py-3 cont text-white ">
<h3 class="my-3">Basic Details</h3>

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
            <label for="name" class="col-sm-2">Email-ID:</label> <span class="col-sm-2"><?php echo $row['e_mail'];?></span>
            <label for="name" class="col-sm-2">Phone :</label> <span class="col-sm-2"><?php echo $row['gphone'];?></span>
              </div>
              <div class="row mb-3">
              <label for="" class="col-sm-2 col-form-label">Course opted:</label>
              <span class="col-sm-4 col-form-label"><?php  echo $rows['course_name']; ?></span>
              <label for="" class="col-sm-2 col-form-label">Course Duration:</label>
              <span class="col-sm-2 col-form-label"><?php echo $rows['no_sem']." "."Semester";?></span>
              </div>
              <div class="row alert alert-dark" role="alert">
                <h5>Note:</h5>
                <p class="text-danger mx-5"><?php echo $row['remark']; ?></p>
            </div>
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
<div class="col-sm-4  rightmen">
    <h3 class=" text-white" align="center">Info center</h3>
    <div class="content mx-2">
    <span><i class="fa fa-thumb-tack"></i></span>
    <span><a href="#">Fee Payment details</a></span><br>
       
    </div>
    </fieldset>
</div>
</div>
</div>

<!---<footer class="page-footer text-white font-small pt-4">

   Footer Lin
    <div class="container-fluid text-center text-md-left">
  
      <div class="row">
  
        <div class="col-md-6 mt-md-0 mt-3">
  
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>
  
        </div>
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <div class="col-md-3 mb-md-0 mb-3">
  
          <h5 class="text-uppercase">Links</h5>
   
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
       <!-- <div class="col-md-3 mb-md-0 mb-3">
  
        Links
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright 
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> www.senk.com</a>
    </div>
     Copyright -->
  
  </footer>
  <!-- Footer-->

      -->



</body>
</html>

<?php


mysqli_close($conn);

?>