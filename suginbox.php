<?php
require('dbconnect.php');

$sql="select sug_id,email_id,content from suggest";


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

body{
       
       font-family: 'Montserrat',sans-serif;
       
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: cover;
      
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

</style>
</head>
<body>
    <header class="bg-dark ">
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
    <h3 class="col-md-4 col-sm-12 ">Suggestion Box: </h3>
    <span class="col-md-4 col-sm-12">
    <button class="btn btn-success" onclick="del_inbox()">Delete 10 Message</button></span><br> <br>
    <!--<span class="col-md-4 col-sm-12"><button class="btn btn-success">Empty inbox</button></span>-->
    </div>
</span>
    <div class="table-responsive-sm">
       <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
           <th scope="col"><span class=" ">Suggestion ID</span></th>
           <th scope="col"><span class="">Email ID</span></th>          
           <th scope="col"><span class=" ">Message</span></th>     
           <th scope="col"><span class="">Action</span></th> 
           </tr>  
         </thead>
         <tbody>
        <?php
         $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
         while($row=mysqli_fetch_array(($query))){
             echo "<tr>";
             echo "<th scope=\"row\">".$row['sug_id']."</th>";
             echo "<td >".$row['email_id']."</td>";
             echo "<td>".$row['content']."</td>";
             echo "<td><button class=\"btn btn-danger text-white\" onclick=\"return del(".$row['sug_id'].")\">Delete</td>";
             echo "</tr>";
         }
     $conn->close(); 
        ?>
      
             </tbody>
    </table>
    </div>
    </div>
    
<script>
function del(id){
    if(confirm("Are you sure you want to delete this message?"))
    window.location="delmsg.php?del="+id;
    else
    return false;
}
function del_inbox(){
if(confirm("Are you sure you want to delete last 10 message from inbox?"))
{ 
    window.location="delmsg.php?del_in=true";
}
}
</script>
</body>
</html>