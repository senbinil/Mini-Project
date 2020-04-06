<?php
session_start();
if(isset($_SESSION['alert']))
{
echo $_SESSION['alert'];
$_SESSION['alert']="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <style>
  body, html {
    height:100%; /* ADD this */
}
    body {
  font-family: 'Montserrat',sans-serif;
  margin: 0 auto -120px ; 
  font-weight: bold;
  /* Margin bottom by footer height */
}
.container {
      min-height: 100%;
      height: auto !important;
      height: 100%;
     /* the bottom margin is the negative value of the footer's height */
      position: relative;
}

footer {
      bottom: 0px;
      width: 100%;
      text-align: center;
}

footer{
    height: 120px
}

    .nav{
        font-size: large;
        background-color:#e6e6e6;
    }
   .contentx{
margin-bottom:100px;}

.social-links a {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  padding-top: 10px;
  font-size: 18px;
  font-size: 1.2em;
  display: inline-block;
  margin: 0 5px;
  text-align: center;
  color: white;
  line-height: normal; }
  .social-links a.facebook {
    background-color: #204385; }
  .social-links a.twitter {
    background-color: #2aa9e0; }
  .social-links a.google-plus {
    background-color: #d3492c; }
  .social-links a.pinterest {
    background-color: #ca2128; }
/* Trick */


    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
  <!--carousel-->
  <div data-ride="carousel" id="carex" class=" headsec carousel carousel-fade slide">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carex"data-slide-to="0"></li>
        <li data-target="#carex" data-ride="1"></li>
        <!--<li data-target="#carex" data-ride="2"></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
           <div class="content bg-primary w-100 text-white d-block" style="height:200px;">
               <p class="lead text-center" style="font-size:60px; padding-top: 30px;" >Welcome to our College </p>
           </div>
        </div>
        <div class="carousel-item">
            <div class="content bg-danger w-100 text-white d-block" style="height:200px;">
                <p class="lead text-center" style="font-size:60px; padding-top: 30px;" >Welcome to our College </p>
            </div>
        </div>
    </div>
    <a href="#carex" role="button" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a href="#carex" role="button" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>


  <nav class="nav py-3  justify-content-center mb-4">
    <a class="nav-link active" href="index.php">Home</a>
    <a class="nav-link" href="more.htm">More</a>
    <a class="nav-link" href="collegegal.htm">College Gallery</a>

  </nav>





  <div class="container contentx">
      <div class="row">
          <div class="col-sm-8">
              <h3 class="mb-5">#About Us</h3>
              <p class="">The College of  Applied Science Perissery established in 2015, is affiliated to the University of Kerala and is  managed by the  Institute for Human Resources Development, Thiruvananthapuram, a Government of Kerala undertaking popularly known as the IHRD in the Kerala higher education sector.The college has a modest beginning with two First Degree Programmes in English and Commerce and two Career-related First Degree Programmes in Computer Application and Computer Science.  College of Applied Science,
                 Perissery is an affiliated institution of the University of Kerala and is managed by IHRD, a Govt. of Kerala institution.
                  </p>
                  
                  
                  
                  
                  <br>






                  <img src="img/map.PNG" width="700px" style="overflow: hidden;" class="img-fluid" class="mb-4 col-sm-8" alt=""><br>
                  Courses  Affiliated to University of Kerala
                  <ul class="my-3">
                    <li>B.Sc Computer Science(30 seats) 3 year undergraduate programme</li>
                    <li>BCA (30 seats) 3 year undergraduate programme</li>
                  </ul>
                 <p>Admission to first semester degree programmes are conducted as per the guidelines of the University of Kerala during May-July every year.</p>
                 <div class="border border-dark p-3" id="contactme">
                   <h5>Contact us:
                   </h5>
                   <span>Office Number:</span>&nbsp;<a href="tel:0479-33213" class="btn btn-dark">0479-33213</a><br><br>
                  <span>Principal Number:</span>&nbsp;<a href="tel:792333213" class="btn btn-dark">792333213</a><br><br>
                  <span>College Email :</span>&nbsp; <a href="mailto:xyz@gmail.com" class="text-decoration-none">xyz@gmai.com</a>
  </div>
          </div>
          <div class="col-sm-4">
             <h3 class="lead">Mail Us:</h3>
             <form action="suggest.php" method="POST" class="form-group">
                <label for="email" class="col-form-label">Email Address:</label>
                <div class="">
                    <input type="email" name="emailid"  class="form-control" required  >
                </div>
                <label for="input">Message:</label>
                <textarea name="msg" cols="30"  class="form-control" rows="5" required></textarea>
                <center><input class="btn btn-primary mt-3" type="submit" value="Submit"></center>
             </form>
          </div>
      </div>
  </div>

<hr>

  
  <footer class=" bg-dark text-white pt-3 ">
    <p>Copyright &copy; 2020 Senk . Designed by SeN. All rights reserved</p>

    <div class="social-links">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
    </div>
</footer>

</body>
</html>