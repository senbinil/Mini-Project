<?php
session_start();
require("dbconnect.php");
if(isset($_POST['log'])){
    $id=$_POST['empid'];
    $phone=$_POST['phone'];
    $_SESSION['phone']=$phone;
    $sql="select * from staffenroll where emp_id=$id and mobile=$phone";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $name=$row['emp_name'];
        $sal=$row['salary'];
        $ifsc=$row['ifsc'];
        $acc=$row['acc_no'];
        $_SESSION['name']=$id;
        $_SESSION['salstat']="<script>confirm(\"User Found Please Procced\");</script>";
        $j_month=$row['j_date'];  
        $new=(int)$j_month[3].$j_month[4]; 
        $new--;

        
    }else
    { $_SESSION['salstat']= "<script> alert(\"User Error\");
        </script>";
        //header("location:staffsal.php");
        
    }
}

if(isset($_SESSION['salstat']))
echo $_SESSION['salstat'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Salary Center</title>
    <style>
         header{
        position: sticky;;
        font-size: 45px;
        width: 100%;
        padding-left: 1.5rem;
        line-height: 1.5;
        font-weight: 500;
        color: white;
        padding: 35px 22px;

     }
     body{
        font-family: 'Montserrat',sans-serif;
     }
     .container
     {
         margin-bottom: 209px;
     }
    </style>
</head>
<body>
    <header class="container-fluid bg-dark">
        <span class="hash"><i class="fa fa-dashcube" aria-hidden="true"></i>
        </span>Payment Center
    </header><nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <div class="container">
        <h4 class="mb-3">Employee Details:</h4>
    <form action="#" align="center" method="POST" class="border border-danger py-4">
        <div class="row my-2">
            <label for="" class="col-form-label col-sm-2">Employee ID:</label>
            <div class="col-sm-3">
                <input type="text" name="empid" class="form-control" autocomplete="off" required placeholder="Employee ID">
            </div>
            <label for="" class="col-form-label col-sm-2">Phone No:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="phone" autocomplete="off" required placeholder="Phone Number">
            </div>
        </div>
        <center><input type="submit" class="btn btn-info my-3"  name="log" value="Check"></center>
    </form>
    <form action="salback.php" method="POST" class="mt-5 px-4  py-4 border border-primary">
        <div class="row my-2">
            <label for="" class="col-form-label col-sm-2">Employee Name:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="empname" value="<?php  if(isset($name))echo $name;  
                  
                    ?>"
                     
                      required>
            </div>
            <label for="" class="col-form-label col-sm-2">Account No:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="acc_no" required value="<?php  if(isset($acc))echo $acc;?>" placeholder="A/C Number">
            </div>
        </div>
        <div class="row my-2">
            <label for="" class="col-form-label col-sm-2"> IFSC:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="ifsc" required value="<?php  if(isset($ifsc))echo $ifsc;?>">
            </div>
            <label for="" class="col-form-label col-sm-2"> Monthly Pay:</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="salary" value="<?php if(isset($sal))echo $sal; ?>" required>
            </div>
        </div>
        <div class="row my-2">
            <label for="" class="col-form-label col-sm-2"> Month:</label>
            <div class="col-sm-3">
            <select name="month" class="form-control" id="">
            <?php $month=array('January','February','March','April','May','June','July','August','September','October','November','December') ;
                 
                for($i=0;$i<12;$i++){
                    $status=($new==$i)? "selected":"";
                echo "<option $status value=\"$month[$i]\">$month[$i]</option>";
              
               
                }?>
            </select>
        </div>
            <label for="" class="col-form-label col-sm-2"> Year:</label>
            <div class="col-sm-3">
                <select name="yrs" class="form-control" id="">
                <?php $year=date('Y');
                echo " <option value=\"$year\">$year</option>"?>
                ?>
                </select>
        </div>
        </div>
        <center><input type="submit" class="btn btn-danger my-2" name="pay" value="Pay"></center>
    </form>
    </div>
    <script>
        function chk(){
            alert("Hello");
        }
    </script>
</body>
</html>
<?php
echo $month[0];
$name="";
$sal="";
if(isset($_SESSION['salstat']))
unset($_SESSION['salstat']);
?>