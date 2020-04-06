<?php

require('dbconnect.php');
$ad=$_SESSION['admin'];
$sql="select * from studentenroll where admin_no=$ad";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    $_SESSION['msg']=true;
    $row=mysqli_fetch_assoc($result);
}
else
{
    $_SESSION['msg']=false;
    //echo "<script>window.location.replace(\"global.php\")
    //;</script>";
    
}
//if(isset($_SESSION['update']))

?>
<style>
    
</style>
 <span class="result  text-center my-3"><h4>Result <span class="text-danger"><?php  if(!$_SESSION['msg'])echo "Not Found"; else echo $_SESSION['msg'];  ?></span></h4></span>
<form action="#"method="POST"  class="mb-5">
 <div class="row mx-1 out mt-5  my-3">
        
<label for="" class="col-sm-2 col-form-label">Admission No:</label>
<div  class="col-sm-2 ">
    <input type="text" value="<?php if(isset($row)) echo $row['admin_no']; else echo ""; ?>" name="admino" class="form-control" readonly>
</div>
<label for="" class="col-sm-2 col-form-label">First name:</label>
<div  class="col-sm-2 ">
    <input type="text" value="<?php if(isset($row)) echo $row['fname']; else echo "";  ?>" name="fname" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Last name:</label>

<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['lname']; else echo "";  ?>" name="lname" class="form-control">
</div>

<label for="" class="col-sm-2 col-form-label">Blood Group:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['blood_group']; else echo "";  ?>" name="blod" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Address:</label>

<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['address']; else echo "";  ?>" name="add" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">State:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['state']; else echo "";  ?>" name="state" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">City:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['city']; else echo "";  ?>" name="city" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">ZIP:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['zip_code']; else echo "";  ?>" name="zip" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Gender:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['gender']; else echo "";  ?>" name="gender" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Guardian:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['guard_fname']; else echo "";  ?>" name="gfname" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Guardian Last name:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['guard_lname']; else echo "";  ?>" name="glname" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Email:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['e_mail']; else echo "";  ?>" name="email" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">UG COURSE:</label>
<label for="" class="col-sm-2 col-form-label">
    <?php
    if($_SESSION['msg']){
    $ugcode=$row['ug_course'];
    $sqlug="select course_name from ugcourse where course_id=$ugcode ";
    $res=mysqli_query($conn,$sqlug);
    $ug=mysqli_fetch_assoc($res);
    if(isset($ug)) echo $ug['course_name']; else echo "";}
    ?>
</label>
<label for="" class="col-sm-2 col-form-label">Semester:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['semester']; else echo "";  ?>" name="sem" class="form-control">
</div>
<label for="" class="col-sm-2 col-form-label">Current Notice:</label>
<label for="" class="col-sm-2 col-form-label"><?php if(isset($row)) echo $row['remark']; else echo "";  ?></label>

<label for="" class="col-sm-2 col-form-label">Phone:</label>
<div for="" class="col-sm-2 col-form-label">
  <input type="text"  value="<?php if(isset($row)) echo $row['gphone']; else echo "";  ?>" name="phone" class="form-control">
</div>

</div><hr>
<center><span class="bg-info"><input type="submit" name="update"  class="btn btn-primary btn-md" value="Submit"></span></center>
</form>
<?php
if(isset($_SESSION['msg']))
unset($_SESSION['msg']);


if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $blod=$_POST['blod'];
    $add=$_POST['add'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $gen=$_POST['gender'];
    $gfname=$_POST['gfname'];
    $id=$_POST['admino'];
    $glname=$_POST['glname'];
    $mail=$_POST['email'];
    $sem=$_POST['sem'];
    $phone=$_POST['phone'];
    $sqlup="update studentenroll set fname='$fname',lname='$lname',blood_group='$blod',address='$add',state='$state',city='$city',zip_code=$zip,gender='$gen',guard_fname='$gfname',guard_lname='$glname',gphone=$phone,semester=$sem ,e_mail='$mail' where admin_no=$id and ug_course=$ugcode ";
    if(mysqli_query($conn,$sqlup))
    {
    $_SESSION['update']="<script> alert(\"Info Changed\");window.location.replace(\"global.php\");
    </script>";
    var_dump($_SESSION['update']);
    //header("location:global.php");
    }
    else
    echo "Error updating record: " . mysqli_error($conn);

    //$_SESSION['update']="<script> alert(\"No Change\");</script>";

}
else

echo "none";









mysqli_close($conn);
?>