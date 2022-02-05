<?php
include ("../control/sessioncheck.php");
include ("../model/setconn.php");
$username=$_SESSION["username"];
$res= execute("select * from users where username='$username' ");
$row=$res->fetch_assoc();
$phone=$row["phoneno"];
$successmsg="";

if(isset($_POST["submit"]))
{
 
  $successmsg="<h4>Delivery has been successfully done</h4><h4>Delivery by $username</h4>
  <h4>Delivery guy phonenumber $phone</h4>";
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dcss.css">
</head>
<head>
<style>
a:link, a:visited {
  background-color:  rgb(99, 43, 4);
  color:  white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>
</head>
<body>
<body>
 <div> 
<p><h1>Delivery Guy Home Page</h1></p>
</div>
<div>
<tr><th><a href="orderstatus.php">See pending Order</a></th>
<th><a href="dguyinfo.php">Show Profile information</a></th>
<th><a href="../control/logout.php">Logout</a></th>
<th><a href="../view/updatedguy.php">Update Information</a></div>


</body>
</html>

   
</body>
</html>