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
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style>
           @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
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