<?php
//session_start();
require('dbconnect.php');
if(isset($_GET['blood'])){
$blod=$_GET['blood'];
$sql="select fname,lname,semester from studentenroll where blood_group='$blod'";
$query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
while($row=mysqli_fetch_array($query)){
  //  echo $row['fname'].$row['lname'].$row['semester'];
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    body,html
    {
        width: 100%;
        height: 100%;
    }

    body{
        font-family: 'Montserrat',sans-serif;
    }
    .head
    {
        font-weight: normal;
        
    }
  .contact{
      text-align: center;
    }
   .contact1{
     width: 200px;
     
   }
    .result{
        height:fit-content;
        border-radius: 25px;
    }
    @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }
    </style>
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">College Of Applied Science </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exlog.php">Registration</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link " href="about.php" tabindex="-1">Contact</a>
            </li>
          </ul>
       
        </div>
      </nav>

    <div class="container-fluid mt-2">
        <div class="box jumbotron bg-primary">
        <h1 class="text-white head"><i class="fa fa-medkit" aria-hidden="true"></i>
            Blood Search</h1>
            <div class="card">
                <div class="card-body">
                <h3 class="card-title">
                    <p class="lead mx-2 text-danger " >* Stricty for medical emergency . If  improper usage of this service found illegal actions will be taken</p>
                </h3>
                <div class="card-text container-fluid mt-5" >
                    <form action="blod.php" class="form-inline column" >
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="input" class="col-md-5">Enter  Blood Group:&nbsp;</label>
                                <input type="text" name="blood" class="form-control col-md-3" maxlength="2" required><br>
                                <input type="submit"  value="Search" class="btn btn-primary  mx-4">
                            </div>
                         
                        </div>
                    </form>
                    <div class="result  mt-4">
                      <div class="row">
                        <label for="res" class="col-sm-12">Result</label>
                        <label for="name" class="col-sm-4" style="font-size: xx-large;">Name</label>
                        <label for="sem" class="col-sm-4" style="font-size: xx-large;">Semester</label>
                        <label for="sem" class="col-sm-4" style="font-size: xx-large;">Course</label>

                        <?php
if(isset($_GET['blood'])){
  $blod=$_GET['blood'];
  $sql="select fname,lname,semester , ug_course from studentenroll where blood_group='$blod'";
 
  $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
  while($row=mysqli_fetch_array($query)){
      echo "<label class=\"col-sm-4 text-danger\">".$row['fname']." ".$row['lname']."</label>";
      echo "<label class=\"col-sm-4 text-danger\">".$row['semester']."</label>";
      $cs=$row['ug_course'];
      $sql2="select course_name from ugcourse where course_id=$cs";
      $query2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
      $row2=mysqli_fetch_array($query2);
      echo "<label class=\"col-sm-4 text-danger\">".$row2['course_name']."</label>";



  }
  }
  else
  echo "  ";

?>
                      </div>
                      <br>
                      <p class="lead contact">In case match found please get in touch with college office regarding student availablity
                        <div class="card border-primary bg-light">
                          <div class="card-body text-center">
                            Contact <br><br>
                            <button class="btn contact1 btn-secondary mr-4 text-white">0479-123232</button>
                            <button class="btn contact1 btn-danger mr-4 text-white">0479-123232</button>

                          </div>
                        </div>
                      </p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>