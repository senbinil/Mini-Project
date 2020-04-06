<?php
if(isset($_POST['log'])){

    $admin=$_POST['admno'];
    $course=$_POST['course'];
    $sem=$_POST['sem'];
    $amt=$_POST['amount'];
    $pay=$_POST['mode'];


}

 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
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
     body{
         font-family: 'Montserrat',sans-serif;
         height: 100%;
         min-height: 100%;
         
  
     }
    </style>
</head>
<body>
    <header>
        <span class="hash"><i class="fa fa-dashcube" aria-hidden="true"></i>
        </span>Review
    </header>

    <hr class="my-5">
    <div class="container">
        <h4 class="my-4">Please Review provided details: </h4>
        
            <form action="feeback.php" method="post">
                <div class="row mx-3">
                <label for="" class="col-md-6 col-form-label">Admission No:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="myio1"  name="admission" readonly="readonly" value="<?php echo $admin;?>">
                </div>
                <label for="" class="col-md-6  my-2 col-form-label">Course</label>
                <div class="col-md-6 my-2">
                    <input type="text"  class="form-control" name="cs" id="myio2" readonly="readonly" value="<?php echo $course;?>">
                </div>
                <label for="" class="col-md-6  my-2 col-form-label">Semester</label>
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control" id="myio3" name="semester"  readonly="readonly" value="<?php echo $sem;?>">
                </div>
                <label for="" class="col-md-6  my-2 col-form-label">Amount</label>
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control " name="amt"  id="myio4" readonly="readonly" value="<?php echo $amt;?>">
                </div>
                <label for="" class="col-md-6  my-2 col-form-label">Payment Mode</label>
                <div class="col-md-6 my-2">
                    <input type="text" class="form-control"  name="pay" id="myio5" readonly="readonly" value="<?php echo $pay;?>">
                </div>
            </div>
            <hr class="my-4">
            <span class="text-primary correct"><a href="feeupdate.php" id="mybtn">Edit</a>
                 </span>
            <center><input type="Submit" class="btn btn-danger my-5" name="feelog" value="Submit"></center>
            </form>
        </div>
   
</body>
</html>
<?php



?>