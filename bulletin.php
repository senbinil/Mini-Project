<?php
session_start();
$_SESSION['logalert']=false;
if(!isset($_SESSION['log'])){
    $_SESSION['logalert']=true;
    header("Location:adminlog.php");
}


$_SESSION['stat']="";
require('dbconnect.php');

if(isset($_POST['cat'])&& isset($_POST['content'])){
$cat=$_POST['cat'];$content=$_POST['content'];
$sql1="insert into bulletin(msg_cat,msg)values('$cat','$content')";
if($conn->query($sql1)==true){
    //echo "inserted reload pls";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
else
{
    echo "Error".$sql1."<br>".$conn->error;
}

}

if(isset($_SESSION['delstat']))
echo $_SESSION['delstat'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>DashBoard</title>
    <style>
        body{
            font-family: 'Montserrat',sans-serif;
        }


            .main{
                margin-bottom: 200px;
            }
              
            
             header{
                position: sticky;;
                font-size: 45px;
                width: 100%;
                padding-left: 1.5rem;
                line-height: 1.5;
                font-weight: 500;
                background-image: -webkit-linear-gradient(right, #3931af, #00c6ff);
                color: white;
                padding: 35px 22px;
        
             }
             .content{
                 border:2px solid #00c6ff;
                 height: 500px;
                 background-color: white;
                 overflow: auto;
                 
             }
             .main input{
                text-align: center;
             }
             
             </style>
</head>
<body>
    <header class="container-fluid">
        <span class="hash"><i class="fa fa-briefcase" aria-hidden="true"></i>
        </span>Bulletin
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
    <br>
    <!--content inside-->
    <div class="container-fluid main">
        <div class="row">
            <div class="col-sm-6">
                <h3>Bulletin toolbox:</h3><br>
                <small>Message search:</small><br><br>
                <form action="delbullet.php" method="POST" class="form-group">
                  <div class="row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="msgid" placeholder="Message Id">
                    </div>
                  </div>
                 <center> <input type="submit" name="logbu" class="btn btn-danger my-2" value="Delete"><input type="reset" class=" mx-3 my-2 btn btn-info" value="Reset"></center>
                </form>
                <hr>
                <small>Message Updation:</small><br><br>
                <form action="#" method="POST" class="form-group">
                    <div class="row">
                      <div class="col-sm-12">
                        <select name="cat" class="form-control" id="">
                            <option value="init" selected disabled>Select the category of message</option>
                            <option value="result">Result</option>
                        </select>
                    </div>
                      <div class="col-sm-12 my-4">
                        <textarea name="content" id="" cols="60"placeholder="Enter the Message" class="form-control" rows="6"></textarea>
                    </div>
                    </div>
                   <center> <input type="submit" class="btn btn-danger" value="UPDATE"><input type="reset" class=" mx-3 my-2 btn btn-info" value="Reset"></center>
                  </form>
            </div>
            <div class="col-sm-6">
                <h3>                Bulletin View:
                </h3>
                <div class="content">
                    <div class="bg-light">
<?php
    $sql="select msg,msg_id from bulletin ";
    $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
    while($row=mysqli_fetch_array(($query))){
        echo "<p class=\"list-unstyled card mr-3\">". "ID:".$row['msg_id']."<span class=\"mr-1\"></span>:-".$row['msg']."</p>";
    }
$conn->close();
?></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
$_SESSION['delstat']="";
if(isset($_SESSION['delstat']))
unset($_SESSION['delstat']);

?>