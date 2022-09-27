<?php include_once'DbOnly.php';?>
<?php
$err='';
$errr='';
$msg='';
if (isset($_POST['submit']))
{

$name=htmlentities(addslashes(trim($_POST['name'])));
$phone=htmlentities(addslashes(trim($_POST['phone'])));
$email=htmlentities(addslashes(trim($_POST['email'])));
$city=htmlentities(addslashes(trim($_POST['city'])));
$dob=htmlentities(addslashes(trim($_POST['dob'])));
$monthlyIncome=htmlentities(addslashes(trim($_POST['monthlyIncome'])));
$occupation=htmlentities(addslashes(trim($_POST['occupation'])));
$holdtype=htmlentities(addslashes(trim($_POST['holdtype'])));
$pancard=htmlentities(addslashes(trim($_POST['pancard'])));
$track=htmlentities(addslashes(trim($_POST['track'])));
  $commingLeads=date("Y-m-d");
$registration_time=htmlentities(addslashes(trim($_POST['registration_time'])));

$qry="INSERT INTO creditcard(name,phone,email,city,dob,monthlyIncome,occupation,holdtype,pancard,track,commingLeads) VALUES ('$name','$phone','$email','$city','$dob','$monthlyIncome','$occupation','$holdtype','$pancard','$track','$commingLeads')";
$run=$con->query($qry);
redirect_to('thankyou.php');

}
?>