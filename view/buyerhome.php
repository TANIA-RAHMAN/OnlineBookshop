<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("../Location: login.php"); //Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image3.jpg');
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
<h2>BUYER HOME PAGE</h2>
</center>
<h3><p>Hello!  <?php echo $_SESSION["username"]."!";?></p></h3>

<br/><h5><p>Please select one page you want to go</h5></p>

<p><div class="sidenav">
<p><a href="buybook.php">Show all book</a></p>
<p><a href="buyerinfo.php">Show Profile Information</a></p>
<p><a href="updatebuyer.php">Update Profile information</a></p>
  
</div></p>

<h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>
<br/>
 

</body>
</html>
