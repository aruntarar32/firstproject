<?php

include_once("DbOnly.php");
if (isset($_POST['sub'])) {
    // print_r($_POST);exit();
  $name=$_POST['name'];
  $email=$_POST['email'];
   $pan=$_POST['pancard'];
     $pancard = strtoupper($pan);
  $gender=$_POST['gender'];
  $mobile=$_POST['mobile'];
  $dob=$_POST['dob'];
  $loanType=$_POST['loanType'];
  $city=$_POST['city'];
  $state=$_POST['state'];

  $pincode=$_POST['pincode'];
  $monthlyIncome=$_POST['monthlyIncome'];
  $occupation=$_POST['occupation'];
  $holdtype=$_POST['holdtype'];
  $ipAddress=$_SERVER['REMOTE_ADDR'];
  $fbLeads=$_POST['fbLeads'];
  $commingLeadsDate=date("Y-m-d");
  
     // Document table field
   $now=date('Y-m-d H:i:s');
   $file=$_FILES["file"]["name"];
   $banPass=$_POST['banPass'];
   
  
  // check email phone pancard is exist..

  $getData="SELECT * FROM contact WHERE name='$name' AND mobile='$mobile' order by contactID desc";
  $qry=$con->query($getData);
   $cid=mysqli_fetch_object($qry);
   $lastId=$cid->contactID;
  
  $count=mysqli_num_rows($qry);

  if ($count > 0){ 
    $Insert="insert into leads (contactID,loanType,city,state,pincode,monthlyIncome,occupation,holdtype,ip,fbLeads,commingLeadsDate) values('$lastId','$loanType','$city','$state','$pincode','$monthlyIncome','$occupation','$holdtype','$ipAddress','$fbLeads','$commingLeadsDate')";
   
      $run=$con->query($Insert);
     redirect_to("thankyou.php");
    

  }
  else{

      $Insert1="insert into contact (name,email,pancard,mobile,gender,dob) values('$name','$email','$pancard','$mobile','$gender','$dob')";
      $run1=$con->query($Insert1);
      $last_id = mysqli_insert_id($con);
      
       // here insert bankstatement file in document table.
      
		$tmp_names=$_FILES["file"]["tmp_name"];
        $paths="/home/jointolead/public_html/cc/uploads/".$last_id;
        $path=$paths.'/'.$file;
    	$file1=explode(".",$file);
    	$ext=$file1[1];
    	$allowed=array("jpg","png","pdf","pdf","zip");
    	if(in_array($ext,$allowed))
     	{
    	    if(!is_dir($paths)) {mkdir($paths, 0777, TRUE);}
           move_uploaded_file($tmp_names,$path);
       
         $InsertDoc="insert into document (contactID,documentType,documentFile,password,uploadedDate) values('$last_id','Bank Statement','$file','$banPass','$now')";
          $rundoc=$con->query($InsertDoc);
    	}
      
      
      
      

      if ($run1) {

         $Insert3="insert into leads (contactID,loanType,city,state,pincode,monthlyIncome,occupation,holdtype,ip,fbLeads,commingLeadsDate) values('$last_id','$loanType','$city','$state','$pincode','$monthlyIncome','$occupation','$holdtype','$ipAddress','$fbLeads','$commingLeadsDate')";
         $run3=$con->query($Insert3);
           redirect_to("thankyou.php");
      }else{
           
          redirect_to("thankyou.php");

      }

  }
  
  
}




?>