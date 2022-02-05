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
h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<center>
<h2>HOME PAGE</h2>
</center>
<h3><p>Hello!  <?php echo $_SESSION["username"]."!";?></p></h3>

<br/><h5><p>Please select one page you want to go</h5></p>

<p><div class="sidenav">
  <p><a href="pagetwo.php">Types of Books</a></p>
  <p><a href="">Unarrival books</a></p>
  <p><a href="">New Books</a></p>
  
</div></p>


<h5><p>Do you want to go to <a href="pagetwo.php">nextpage</a></p></h5>
<h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>
<br/>
 

</body>
</html>
