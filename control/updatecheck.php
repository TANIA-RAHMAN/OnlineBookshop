<?php
$error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phoneno']) || empty($_POST['nid']) || empty($_POST['dob'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"users",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['address'],$_POST['phoneno'],$_POST['nid'],$_POST['dob']);

//echo "<script>alert('here')</script>";
date_default_timezone_set("Asia/Dhaka");
setcookie("updatedAt",date("F j, Y, g:i a"),time()+(86400*30),"/");

$connection->CloseCon($conobj);

}
}


?>
