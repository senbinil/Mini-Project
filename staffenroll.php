<?php

session_start();
if(!isset($_SESSION['log'])){
    $_SESSION['logalert']=true;
    header("Location:adminlog.php");
}
if(isset($_SESSION['staff']))
echo $_SESSION['staff'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

header{
           position: sticky;
           font-size: 45px;
           width: 100%;
           padding-left: 1.5rem;
           line-height: 1.5;
           font-weight: 500;
          /* background-image: -webkit-linear-gradient(right, #3931af, #00c6ff);*/
           color: white;
           padding: 35px 22px;
   
        }
        body
        {
            background-image: url("img/staff.jpg");
            font-family: 'Montserrat',sans-serif;
            font-weight: bold;
            background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       color:white;
        }

    </style>
</head>
<body>
    <header class="container-fluid bg-dark">
        <span class="hash"><i class="fa fa-dashcube" aria-hidden="true"></i>
        </span>Dashboard
    </header>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item  btn btn-danger mx-2 my-1">
                        <a class="nav-link text-white" href="adminhome.php">Dashboard Home</a>
                    </li>
                    <li class="nav-item btn btn-danger  mx-2 my-1">
                        <a class="nav-link text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<hr class="my-4">

<div class="container-fluid">
    <h3 class="text-center">Staff Enrollment</h3>
    <form  class="my-3 " action="staffen.php" method="POST">
        <div class="row" >
            <h4 class="col-sm-12">Application Details:</h4><br>
            <label for="" class="col-form-label col-sm-2"> Number:</label>
            <div class="col-sm-2">
                <input type="text" name="app_no" class="form-control" required>
            </div>
            <label for="" class="col-form-label col-sm-2">Form Number:</label>
            <div class="col-sm-2">
                <input type="text"  name="frm_no" class="form-control">
        </div>
        <label for="" class="col-form-label col-sm-2">Applied on :</label>
            <div class="col-sm-2">
                <input type="text" placeholder="DD/MM/YYYY" name="app_date" class="form-control" required>
        </div>
        



        <div class="col-sm-12 my-3">
            <hr>
            <fieldset>
                <legend>Employee Detail</legend>
               <div class="row">
                <label for=""class="col-form-label col-sm-2">Employee Name:</label>
                <div class=" col-sm-3">
                    <input type="text"  name="emp_name" class="form-control" required>
                </div>

                <label for="dob" class="col-sm-2 col-form-label my-1">Birth Date:</label>
                <div class="col-sm-2 my-1">
                    <input type="text" placeholder="DD/MM/YYYY" name="dob" class="form-control" required>
                </div>
                <label for="dob" class="col-sm-1 col-form-label my-1">Gender:</label>
                <div class="col-sm-2 my-1">
                    <input type="radio" class="" name="gen" value="Male"><label class="col-form-label" for="">Male</label>
                    <input type="radio" name="gen" class="" id="" Value="Female"><label for="" class="col-form-label">Female</label>
                </div>
              <label for="" class="col-form-label col-sm-2">Nationality:</label>
              <div class="col-sm-2">
                <select name="nation" class="form-control" id="">
                    <option value="init" selected disabled>Select nationality</option>
                    <option value="Indian">Indian</option>
                </select>
            </div>  

              <label for="" class="col-form-label col-sm-2">Category:</label>
              <div class="col-sm-2">
                <select name="cat" class="form-control" id="" required>
                    <option value="init" selected disabled>Select Category</option>
                    <option value="General">General</option>
                </select>
              </div>  
              <label for="" class="col-form-label col-sm-2">Martial Status:</label>
              <div class="col-sm-2">
                  <select name="martial" required class="form-control" id="">
                    <option value="init" selected disabled>Select Status</option>
                    <option value="Unmarried">unmarried</option>
                    <option value="Married">Married</option>
                </select>
              </div> 
              
              
              <label for="dob" class="col-sm-2 col-form-label my-1">Experience:</label>
              <div class="col-sm-2 my-1">
                <select name="exp" class="form-control" required id="">
                    <option value="init" selected disabled>Select Experience</option>
                    <option value="1">1 Yr</option>
                    <option value="2">2 Yrs</option>
                    <option value="3">3 Yrs</option>
                    <option value="4">4 Yrs</option>
                </select>
              </div>
              
              <label for="dob" class="col-sm-2 col-form-label my-1">Mobile:</label>
              <div class="col-sm-2 my-1">
                  <input type="text" name="mob" class="form-control" required>
              </div>
              
              <label for="dob" class="col-sm-2 col-form-label my-1">E-mail:</label>
              <div class="col-sm-2 my-1">
                  <input type="email" name="email" class="form-control" required>
              </div>
              
              <label for="dob" class="col-sm-2 col-form-label my-1">Blood Group:</label>
              <div class="col-sm-2  my-1">
                <select name="blod" class="form-control" required id="">
                    <option value="init" selected disabled>Select Blood Group</option>
                    <option value="A">A</option>
                    <option value="A+">A+</option>
                    <option value="B">B</option>
                    <option value="B-">B-</option>
                </select>              </div>
              
              <label for="" class="col-form-label col-sm-2">Current Address:</label>
                    <div class="col-sm-5">
                        <textarea name="caddress" class=" form-control"  required></textarea>
                    </div>
                    <label for="" class="col-form-label col-sm-2">Home  Address:</label>
                    <div class="col-sm-4">
                       <textarea name="paddress" class="form-control"  required></textarea>
                    </div>
               </div>
               
            </fieldset>
            <hr>
        </div>
        
               <h3 class="col-sm-12">Qualification</h3>
               <label for="" class="col-form-label col-sm-2">Professional:</label>
               <div class="col-sm-2">
                   <input type="text" name="pro" class="form-control" required>
               </div>
               <label for="" class="col-form-label col-sm-2">Education:</label>
               <div class="col-sm-3">
                   <input type="text" name="edu" class="form-control" required>
               </div>
               <div class="col-sm-12">
               <label for="" class="col-form-label">Specialized Subjects:</label>
               <div class="col-sm-4">
                   <textarea name="spec" class="form-control" id="" required ></textarea>
               </div>
            </div>
       </div>
<hr class="my-4">
       <h4 class="my-2">
           Official Details
       </h4>
       <div class="row">
        <label for="" class="col-form-label col-sm-1">Emp.Type:</label>
        <div class="col-sm-2">
            <select name="emp_type" class="form-control" required id="">
                <option value="Full">Full Time</option>
            </select>
        </div>
        <label for="" class="col-form-label col-sm-2">Designation:</label>
        <div class="col-sm-3">
           <select name="desig" class="form-control" required id="">
               <option value="Lecturer"> Lecturer</option>
           </select>
        </div>
        <label for="" class="col-form-label col-sm-1">Joining on:</label>
        <div class="col-sm-3">
            <input type="text"  name="j_date" placeholder="DD/MM/YYYY" class="form-control">
        </div>
        <label for="" class="col-form-label col-sm-1 my-1">Shift:</label>
        <div class="col-sm-2 my-1">
            <select name="shift" class="form-control" id="" required>
                <option value="init">Morning</option>
            </select>
        </div>
        <label for="" class="col-form-label col-sm-2 my-1">Salary:</label>
        <div class="col-sm-2 my-1">
            <input type="text" name="salary" class="form-control" required>
        </div>
       </div>
       <hr class="my-4">
       <h4 class="my-2">Account Details</h4>

       <div class="row">
           <label for="acno" class="col-form-label col-sm-2">Account Number:</label>
           <div class="col-sm-3">
               <input type="text" name="acc_no" class="form-control" required>
           </div>
           <label for="acno" class="col-form-label col-sm-2">Bank Name:</label>
            <div class="col-sm-2">
                <select name="bank_name" class="form-control" required id="">
                    <option value="SBI">State Bank Of India</option>
                    <option value="AXIS">Axis</option>
                    <option value="ICICI">ICICI</option>
                    <option value="Kerala Bank">Kerala Bank</option>
                </select>
            </div>
            <label for="acno" class="col-form-label col-sm-1">IFSC:</label>

            <div class="col-sm-2">
                <input type="text" name="ifsc" class="form-control" required>
            </div>
       </div>
       <hr class="my-3">
       <center><input type="submit" value="Submit" name="logsub" class="btn btn-primary btn-md my-5"></center>
    </form>
    </div>
    



</body>
</html>



<?php

$_SESSION['staff']="";
if(isset($_SESSION['staff']))
unset($_SESSION['staff']);


?>