<?php
session_start();
include ("../model/setconn.php"); 
if(empty($_SESSION["username"])) 
{
header("../Location: login.php"); //Redirecting To Login page
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dcss.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
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
<center>
<h2>ADMIN HOME PAGE</h2>
</center>
<h3><p>Hello!  <?php echo $_SESSION["username"]."!";?></p></h3>

<br/><h3><p>Please select one page you want to go</h5></p>

<div>
<tr><th><a href="bookinfo.php">Show all book</a></th>
  
<tr><th><a href="alluserinfo.php">Show all user info</a></th>
<tr><th><a href="../databasecreation/orderinfo.php">See Order Status</a></th>
<tr><th><a href="admininfo.php">Admin Profile Informations</a></th>
<tr><th><a href="trash.php">Trash Box</a></th>

</div>
<tr><th><a href="../control/logout.php">logout</a></th>
<br/>
 

</body>
</html>
