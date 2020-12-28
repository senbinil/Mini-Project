<?php
if(!isset($_SESSION))
session_start();
require('dbconnect.php');
$staffid=$_SESSION['empid'];
$sqlstaff="select * from staffenroll where emp_id=$staffid";
$res=mysqli_query($conn,$sqlstaff);
if(mysqli_num_rows($res)>0){
    $_SESSION['msg']=true;
    $roo=mysqli_fetch_assoc($res);
}
else
$_SESSION['msg']=false;





?>





<style>
   
</style>
 <span class="result  text-center my-3"><h4>Result: <span class="text-danger"><?php  if(!$_SESSION['msg'])echo "Not Found"; else echo $_SESSION['msg'];  ?></span></h4></span>
<form action="emp.php" method="POST" class="mb-5">
 <div class="row mx-1 out mt-5 py-2 border border-danger my-3">
        
<label for="" class="col-sm-2 col-form-label">Employee ID No:</label>
<div for="" class="col-sm-2 col-form-label">
    <input type="text" class="form-control" name="emp_id"  value="<?php if(isset($roo)) echo $roo['emp_id']; else echo "";  ?>"  readonly>
</div>
<label for="" class="col-sm-2 col-form-label">Name:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="name" value="<?php if(isset($roo)) echo $roo['emp_name'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">DOB:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="dob" value="<?php if(isset($roo)) echo $roo['dob'];else echo "";  ?> " class="form-control"></div>

<label for="" class="col-sm-2 col-form-label">Blood Group:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="blod" value="<?php if(isset($roo)) echo $roo['blod'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Address:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="caddress" value="<?php if(isset($roo)) echo $roo['caddress'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Permanant address:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="paddress" value="<?php if(isset($roo)) echo $roo['paddress'];else echo "";  ?> " class="form-control"></div>

<label for="" class="col-sm-2 col-form-label">Mobile:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="mobile" value="<?php if(isset($roo)) echo $roo['mobile'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Email:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="email" value="<?php if(isset($roo)) echo $roo['email'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Gender:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="gender" value="<?php if(isset($roo)) echo $roo['gender'];else echo "";  ?> " class="form-control"></div>

<label for="" class="col-sm-2 col-form-label">Employee Type:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="emp_type" value="<?php if(isset($roo)) echo $roo['emp_type'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Designation:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="desig" value="<?php if(isset($roo)) echo $roo['desig'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Shift:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="shift" value="<?php if(isset($roo)) echo $roo['shift'];else echo "";  ?> " class="form-control"></div>


<label for="" class="col-sm-2 col-form-label">Joined Date:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="j_date" value="<?php if(isset($roo)) echo $roo['j_date'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">Salary:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="salary" value="<?php if(isset($roo)) echo $roo['salary'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">A/C No:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="accc" value="<?php if(isset($roo)) echo $roo['acc_no'];else echo "";  ?> " class="form-control"></div>


<label for="" class="col-sm-2 col-form-label">Bank Name:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="bname" value="<?php if(isset($roo)) echo $roo['bank_name'];else echo "";  ?> " class="form-control"></div>
<label for="" class="col-sm-2 col-form-label">IFSC:</label>
<div for="" class="col-sm-2 col-form-label"><input type="text" name="ifsc" value="<?php if(isset($roo)) echo $roo['ifsc'];else echo "";  ?> " class="form-control"></div>
</div>
<hr>
<center><span class="bg-info "><input type="submit" name="empupdate"  class="btn btn-primary btn-md" value="Submit"></span></center>
</form>

<?php
if(isset($_SESSION['msg']))
unset($_SESSION['msg']);


if(isset($_POST['empupdate'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $blod=$_POST['blod'];
    $cadd=$_POST['caddress'];
    $padd=$_POST['paddress'];
    $mob=$_POST['mobile'];
    $email=$_POST['email'];
    $gen=$_POST['gender'];
    $type=$_POST['emp_type'];
    $desig=$_POST['desig'];
    $shift=$_POST['shift'];
    $jdate=$_POST['j_date'];
    $sal=$_POST['salary'];
    $acc=$_POST['accc'];
    $id=$_POST['emp_id'];
    $bname=$_POST['bname'];
    $if=$_POST['ifsc'];
    $sqlupdate="update staffenroll set emp_name='$name',dob='$dob',gender='$gen',blod='$blod',caddress='$cadd',paddress='$padd',mobile=$mob,email='$email',emp_type='$type',desig='$desig',shift='$shift',j_date='$jdate',salary=$sal,acc_no=$acc,bank_name='$bname',ifsc='$if' where emp_id=$id";
    if(mysqli_query($conn,$sqlupdate))
    {
    $_SESSION['update']="<script> alert(\"Info Changed\");window.location.replace(\"global.php\");
    </script>";
    var_dump($_SESSION['update']);
    //header("location:global.php");
    }
    else
    echo "Error updating record: " . mysqli_error($conn);

}


mysqli_close($conn);
?>
