<?php
require('dbconnect.php');
$sql="select msg from bulletin";
$result = mysqli_query($conn, $sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.back(); }
</SCRIPT>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script/jquery.smartmarquee.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    
    body, html {
    height:100%; /* ADD this */
}
    body {
  font-family: 'Montserrat',sans-serif;
  /* Margin bottom by footer height */
}
.cont {
     /* min-height: 90%;
      height: auto !important;
      height: 100%;
      margin: 0 auto -120px ; /* the bottom margin is the negative value of the footer's height */
      
      position: relative;
}

.footer {
      bottom: 0px;
    
      width: 100%;
      text-align: center;
}
.modal{
  background-color: #404B69;
}
.footer{
    height: max-content
}
.smartmarquee{
            position: absolute;
            overflow: hidden;
            
        }

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

    nav ul li{
        font-weight: normal;
        font-size: large;
        
    }
   
    .navbar-brand{
        font-size: x-large;
        font-weight: 500;
    }
    .extra{
      position: relative;
      height: 500px;
    }
    .text-block{
      position: absolute;
   
      
      margin-bottom: 140px;
      bottom: 0;

    }
   
    @media only screen and (max-width: 600px) {
  .text-block {
top: 0;
margin-top: 30px;
  }
}
@media only screen and (max-width: 600px) {
 .divider{
   padding-top: 300px;
 }
 .space{
   display: none;
 }
  }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-white fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CASP</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-arrow-right"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="exlog.php">Student</a>
                  <a class="dropdown-item" href="exlog.php">Staff</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="adminlog.php">College</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="setpass.php">Registration</a>
              </li>
              <li class="nav-item">
                  <a href="more.htm" class="nav-link">More</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item ">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exmodal">
                  Changelog <span class="badge badge-light">new!</span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="modal fade" id="exmodal" tabindex="-1" role="dialog" aria-labelledby="exmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Changelog</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="content">
                <h4>25/01/2020</h4>
                <ul>
                  <li>Initial release 1.0</li>
                  <li>New Design !</li>
                  <li>Add changelog button</li>
                  <li>Base Rework</li>
                  <li>bootstrap Updated to 4.7.0.1</li>
                  <li>Blood Bank funtionality addded</li>
                  <li>Admin login fixed</li>
                  <li>Suggestion Box added</li>
                </ul>
                <p class="lead">For more information and assistance ping as on <a href="mailto:xyz@gmail.com" class="text-decoration-none">xyz@gmai.com</a></p>
                <center><img src="img/loop.gif"  alt=""><br>
              <span class="text-md">Thank You</span>
              </center>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <header class=" container-fluid extra my-4">
        <div class="text-block jumbotron-fluid bg-transparent ">
          <span class="  display-3 ">College Of Applied Science, Perissery</span>
          <p class="lead mb-5 text-white-50">
          <a href="about.php" class="btn btn-dark btn-lg">Read More</a>
        </p>
        </div>
        <canvas class="background"></canvas>
      </header>
    


      <div class="container container-fluid-sm cont">
      <div class="row">
        
        <div class="col-sm-8 ">
          <section>
            <h2>Upcoming Events</h2><br>
            <div class="subcontent">
             <div class="row">
							<div class="col-md-6">
								<div class="feature rounded-icon">
									<div class="feature-icon"><i class="fa fa-thumb-tack"></i></div>
									<h3 class="feature-title "><b>LAKSHAYA 2020</b> </h3>
									<p class="pb-4">College Fest 20/06/2020 </p>
								</div>

								<div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-thumb-tack"></i></div>
									<h3 class="feature-title"> <b>Magazine Release</b> </h3>
									<p>Magazine Release on 22/05/2020</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-thumb-tack"></i></div>
									<h3 class="feature-title"><b>Career Guidance </b></h3>
									<p>Career guidance class for BSC CS on 14/07/2020</p>
								</div>

								<div class="feature rounded-icon">
                <div class="feature-icon"><i class="fa fa-thumb-tack"></i></div>
									<h3 class="feature-title"><b>Union Inaguration</b> </h3>
									<p>Union Inaguration on 03/08/2020</p>
								</div>
							</div>
						</div>

          </section>
        </div>
        <div class="col-sm-4 news">
          <div class=" bg-dark text-white ">
            <h4 align="center">News</h4>
          </div>


          <div class="smartmarquee example  py-3" style=" height:300px;">
    
          <ul class="container" style="overflow: auto; ">
          <?php
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo"<li>".$row['msg']."</li>";
              }
          } else {
              echo "0 results";
          }


          mysqli_close($conn);
          ?>
           

          </ul>
          </div>

        </div>
      </div>
      
      </div>
     
      <hr class="my-5  space"  >

      <div class="container divider mt-5">
       <section class=" fadeIn">
        <div class="row">
          <div class="col-md-6">
            <img src="img/idea.jpg"  class="img-fluid z-depth-1-half" alt="">
          </div>
          <div class="col-md-6 mb-4">
            <h3 class="h3 mb-3">Our Vision</h3>
            <p>To become a centre of excellence for students in education, training and research and to exceed student’s expectations by providing highest quality.</p>
            <p>Click  below to learn more about our college.</p>
            <!-- Main heading -->

            <hr>

           <!-- <p>
              <strong>400+</strong> material UI elements,
              <strong>600+</strong> material icons,
              <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
              <strong>Free for personal and commercial use.</strong>
            </p>-->
            <a href="about.php" class="btn btn-primary btn-md" >Read More</a>
          </div>
        </div>
       </section>
       <hr class="my-5">
       <section>
         <h3 class="text-center mb-5">
           About
         </h3>
         <div class="row">
           
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-code fa-2x text-blue"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Perfect Ambience</h5>
                <p class="grey-text">Thanks to IHRD to provide us with a good college ambience .</p>
                <hr>            <a href="collegegal.htm" class="btn btn-primary btn-md" >Check out</a>

              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Empowering your dreams</h5>
                <p class="grey-text">We Believe Everyone Has The Capacity To Succeed.We're here to help with your success
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fa fa-graduation-cap fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Lots of tutorials</h5>
                <p class="grey-text">We care about the development of our Students. We have prepared numerous class, which allow you to learn
                  how to excel .</p>
              </div>
            </div>
            <!--/Third row-->
            </div>
            <div class="col-md-6">
              <img src="img/gg.jpg" class="img-fluid z-depth-1-half" alt="">
            </div>
         </div>
         
       </section>
      </div>

      
				<footer class="site-footer footer bg-dark text-white mt-5">

          <div class="container-fluid pt-3">
            <div class="row">
              <div class="col-md-4">
              
                  <p class="qot mt-5 ">
                    "You Learn More From Failure Than From Success. Don’t Let It Stop You. Failure Builds Character." - <small><b>unknown</b></small> </blockquote>
                  </p>
                
              </div>
              <div class="col-md-8 my-3">
                <div class="row">
                  <div class="col-md-4">
                    <h5 class=" " align="center">Quick Links</h5>
                    <div class="row">
                      <div class="col-sm-8 mx-5">
                        <a href="about.php">About</a><br>
                        <a href="more.htm">More</a><br>
                        
                      </div>

                  </div>
                </div>
               
                  <div class="col-md-6">
                    <h5>Contact</h5>
                    <p>College Of Applied Science, Perissery, Chengannur, Kerala, India - 689121</p>
                    <div class="social-links">
                      
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                      <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <p class="py-3">Copyright &copy; 2020 Senk . Designed by SeN. All rights reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
				
        </footer>
        <script>
          window.onload = function() {
  Particles.init({
    selector: '.background',
    color: ['#DA0463', '#404B69'],
  connectParticles: true,
  responsive: [{
  	breakpoint: 800,
    options: {
    	color: '#00C9B1',
    	maxParticles: 80,
      connectParticles: false
    }
  }]
  });
};


$(document).ready(function(){
        $(".example").smartmarquee({
            duration:1000,
            loop:true,
            interval:100,
            axis:"vertical",
        });
    });
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
</body>
</html>