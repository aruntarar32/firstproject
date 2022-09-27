<?php
session_start();
if($_SERVER['HTTP_HOST']=="localhost")
{
	define("DB_USERNAME",'root');
	define("DB_PASSWORD",'');
	define("DB_DNAME",'hotel');
	define("DB_HOST",'localhost');
}
else
{	
	define("DB_USERNAME",'creditpay_cc');
	define("DB_PASSWORD",'Hitesh@1155');
	define("DB_DNAME",'creditpay_cc');
	define("DB_HOST",'localhost');	
}	


$con = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DNAME);
if($con->connect_errno > 0)
{
	die('Unable to connect to database ['.$dbquery->connect_error.']');
}




function redirect_to($url)
 {
 	echo '<script>window.location = "'.$url.'";</script>';
 }



?>