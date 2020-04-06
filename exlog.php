
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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