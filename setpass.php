<?php
session_start();
if(isset($_SESSION['alertlog']))
echo "<script>confirm(\"".$_SESSION['alertlog']."\");</script>";

if(isset($_SESSION['flag']))
echo "<script>alert(\"".$_SESSION['flag']."\");</script>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
      //  function preventBack() {// window.history.forward();
          //window.history.back(); }
       // setTimeout("preventBack()", 0);
      //  window.onunload = function () { null };
     
    </script>
     <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <style>
         @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }
  body{
       
       font-family: 'Montserrat',sans-serif;
       background-image: url("img/pass.png");
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       

      
   }
 
   html {
  position: relative;
  min-height: 100% !important;
  }
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  /*margin-bottom: 250px; /* Margin bottom by footer height */
}
.container{
  flex: 1;
}
.footer {
  position: relative;
  bottom: 0;
  width: 100%;
  height:fit-content; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
  
}


    </style>
</head>
<body>
    <header class="text-center bg-transparent text-dark py-5">
        <h1>Password recovery</h1>
    </header>
    <nav class="navbar mb-4 navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item  r mx-2 my-1">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 FAQ
</button>

<!-- Modal -->
<div class="modal fade bg-info" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">HELP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <div class="row">
         <h5 class="col-sm-12"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i>
Why  i am on this page ?</h5><br>
          
            <p class="col-sm-12 px-3"><dl>
              <dh class="text-left  "><b>Password Reset</b></dh>
              <dd class="my-3">In case user have forgotten his/her password they can reset their password using admission number and phone number which they had provided during registration.</dd>
              <dh><b>Don't Know Password ?</b></dh>
              <dd>New user's please set their password before accessing their profile.</dd>
              <dh><b>Don't Know Admission No or Phone ?</b></dh>
              <dd>In case if you don't know admission number or phone number please contact college office for further assistance. <b><a href="about.php#contactme">Contact us</a></b></dd>
            </dl></p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                    </li>


                   
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <h3>Step 1:</h3>
        <form action="checkuser.php"  method="POST">
        <div class="row">
            <label for="init" class="col-sm-3 col-form-label">Admission/Employee ID:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="admno"  <?php if(isset($_SESSION['disable'])) echo "disabled";?> autocomplete="off"   onkeypress="return onlyNumberKey(event)" placeholder="Enter you admission number" required>
            </div>
            <label for="name" class="col-sm-3 col-form-label">Phone Number:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="phone"   <?php if(isset($_SESSION['disable'])) echo "disabled";?> autocomplete="off"  onkeypress="return onlyNumberKey(event)" maxlength="10" minlength="10" placeholder="Enter your number" required>
            </div>
        </div>
        <center><input type="submit" class="btn btn-primary mt-3" value="Check"></center>
        </form>
        <span class="mt-5">&nbsp;</span>
        <h3>Step 2:</h3>
        <form action="setpassword.php" method="POST">
            <div class="row">
                <label for="init" class="col-sm-3 col-form-label">Enter your  new Password:</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" id="pass1"  pattern=".{8,}"  title="Eight or more characters" placeholder="Enter new password" required>
                </div>
                <label for="von"  class="col-sm-3 col-form-label">Confirm new password:</label>
                <div class="col-sm-3">
                    <input type="text" name="pass" class="form-control" autocomplete="off"  id="pass2" pattern=".{8,}"  title="Eight or more characters" placeholder="Enter the same password" required>
                </div>
            </div>
            <center><input type="submit" value="Submit" onclick="return chkpass()"  class=" mt-4 btn btn-danger"> </center>
        </form>

    </div>




    <footer class="footer  mt-5 page-footer text-white bg-dark font-small pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
      
              <!-- Content -->
              <h5 class="text-uppercase">CASP</h5>
            <p class="qot  ">
                    "You Learn More From Failure Than From Success. Don’t Let It Stop You. Failure Builds Character." - <small><b>unknown</b></small> </blockquote>
                  </p>
                
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none ">
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-uppercase">Login</h5>
       
              <ul class="list-unstyled">
                <li>
                  <a href="exlog.php">Student Login</a>
                </li>
                <li>
                  <a href="exlog.php">Staff Login</a>
                </li>
             
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-uppercase">Other</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="about.php">About</a>
                </li>
                
              </ul>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center ">© 2020 Copyright:
          <a href="#"> www.senk.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
      <script>
        function chkpass(){
          var x=document.getElementById("pass1").value;
          var confirmpass=document.getElementById("pass2").value;
          if(x!=confirmpass){
            alert("Password do not match");
            return false;
          }
          return true;
        }
        function onlyNumberKey(evt) { 
          
          // Only ASCII charactar in that range allowed 
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
              return false; 
          return true; 
      } 
      </script>
</body>
</html>
<?php
$_SESSION['disable']=null;

if(isset($_SESSION['disable']))
$_SESSION['disable']=false;
if(isset($_SESSION['alertlog']))
unset($_SESSION['alertlog']);
if(isset($_SESSION['flag']))
unset($_SESSION['flag']);
?>