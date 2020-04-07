<?php
require('dbconnect.php');

$sql="select sug_id,email_id,content from suggest  ";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBox</title>
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <script src="script/jQuery-3.4.1.min.js"></script>
    <script src="script/bootstrap.bundle.min.js" ></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <meta charset="UTF-8">
    <style>	
     @font-face{
      font-family:Montserrat;
      src: url(fonts/Montserrat-Regular.ttf);
    }
body, html {
    height:100%; /* ADD this */
}
body{
       
       font-family: 'Montserrat',sans-serif;
       background-image: url("img/suggestion.png");
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
       color: white;
      
   }
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
    body {
  font-family: 'Montserrat',sans-serif;
  /* Margin bottom by footer height */
 

}
.subcontent{
    text-align: center;
}
</style>
</head>
<body>
    <header class="bg-dark">
        <span class="hash"><i class="fa fa-inbox" aria-hidden="true"></i>
        </span>Suggestion  Inbox
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
<div class="container-fluid">
    <div class="row mb-3">
    <h3 class="col-sm-4">Suggestion Box: </h3>
    <span class="col-sm-4">
    <button class="btn btn-success">Delete 10 Message</button></span>
    <span class="col-sm-4"><button class="btn btn-success">Empty inbox</button></span>
    </div>
    <div class="content mb-2">
       <div class="row" align="center">
           <span class="col-sm-3 btn btn-light">Suggestion ID</span>
           <span class="col-sm-3 btn btn-light">Email-ID</span>
           <span class="col-sm-3 btn btn-light">Message</span>
           <span class="col-sm-3 btn btn-light">Action</span>
        </div>
        <?php
         $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
         while($row=mysqli_fetch_array(($query))){
             echo "<div class=\"row text-center my-3\">";
             echo "<span class=\"col-sm-3\">".$row['sug_id']."</span>";
             echo "<span class=\"col-sm-3\">".$row['email_id']."</span>";
             echo "<span class=\"col-sm-3\">".$row['content']."</span>";
             echo "<button class=\"btn btn-warning text-white\" onclick=\"return del(".$row['sug_id'].")\">Delete";
             echo "</div>";
         }
     $conn->close();
        ?>
      <!--  <div class="row text-center mb-1">
               <span class="col-sm-4">12465</span>
               <span class="col-sm-4">dsgfdhh@gmail.dom</span>
               <span class="col-sm-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus eius ipsa et nobis assumenda dolorum autem impedit, necessitatibus sed fugiat quam, veniam laudantium reprehenderit dolorem dolores itaque corporis aliquid.</span>
            </div>
            <div class="row">
                <span class="col-sm-4">12465</span>
                <span class="col-sm-4">dsgfdhh@gmail.dom</span>
                <span class="col-sm-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloribus eius ipsa et nobis assumenda dolorum autem impedit, necessitatibus sed fugiat quam, veniam laudantium reprehenderit dolorem dolores itaque corporis aliquid.</span>
             </div>
        -->
        
    </div>
</div>
<script>
function del(id){
    if(confirm("Are you sure you want to delete this message?")==true)
    window.location="delmsg.php?del="+id;
    else
    return false;
}



</script>

</body>
</html>