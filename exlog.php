
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }

body{
       
       font-family: 'Montserrat',sans-serif;
       background-image: url("img/background.svg");
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
      
   }

   @media only screen and (max-width:600px){
     h1{
       color:tomato;
     }
   } 

    </style>
     <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>





    <div class="head container py-0 text-white">
        <h1 align="center">Student/Staff Login</h1>
    </div>
    <!-- Main navigation -->
    <div class="container my-5 px-0 z-depth-1">
   



<nav aria-label="breadcrumb" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Login</li>
  </ol>
</nav>
        <!--Section: Content-->
        <section class="p-5 my-md-5 text-center" >
         
      
          <form class="my-5 mx-md-5" action="procheck.php" method="POST">
      
            <div class="row">
              <div class="col-sm-5 mx-auto">
                <!-- Material form login -->
                <div class="card py-5 ">
      
                  <!--Card content-->
                  <div class="card-body">
      
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="#!">

      
                      <!-- Name -->
                      <input type="text" id="defaultSubscriptionFormPassword"   maxlength="6" minlength="4"  onkeypress="return onlyNumberKey(event)" name="proname"required class="form-control mb-4" placeholder="Username">
      
                      <!-- Email -->
                      <input type="password" id="defaultSubscriptionFormEmail" name="propass" required class="form-control" placeholder="Password">
                      <span class="text-center text-danger"><?php if(isset($_SESSION['userlogin'])) echo "Username or Password mismatch try again" ; else echo "" ;  ?></span>
                      <small id="passwordHelpBlock" class="form-text text-right blue-text">
                        <a href="setpass.php">Recover Password</a>
                      </small>
      
                      <div class="text-center">
                       <input type="submit" class="btn btn-outline-danger btn-rounded my-4 waves-effect" value="login">
                      </div>
      
                    </form>
                    <!-- Form -->
      
                  </div>
      
                </div>
                <!-- Material form login -->
              </div>
            </div>
      
          </form>
      
        </section>
        <!--Section: Content-->
      
      
      </div>
      
      <section class="container">
        <div class="note">

<h6 class="lead">Note</h6>
            <p>Don't Know Password ? Please Set Your Password <a href="setpass.php">Here</a></p>
        </div>
<script>


function onlyNumberKey(evt) { 
          
          // Only ASCII charactar in that range allowed 
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
              return false; 
          return true; 
      } 
</script>


      </section>
</body>
</html>
<?php

if(isset($_SESSION['userlogin']))
unset($_SESSION['userlogin']);
?>