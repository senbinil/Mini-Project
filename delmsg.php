<?php

function delbook($delid){
    require('dbconnect.php');
    $sql="delete from suggest where sug_id=".$delid;
    if($conn->query($sql)===true){
        // echo "<script>alert(\"Inserted\");</script>";
        header("location:suginbox.php");
     
     }
     else
     {
         echo"Error:".$sql."<br>".$conn->error;
     }
     
     $conn->close();
     
}
if($_GET['del']){
    $id=$_GET['del'];
    delbook($id);
}
if($_GET['del_in']){
    require_once('dbconnect.php');
    $delete_inbox="delete from suggest limit 10";
    if(mysqli_query($conn,$delete_inbox))
    header("location:suginbox.php");
    
}
?>


