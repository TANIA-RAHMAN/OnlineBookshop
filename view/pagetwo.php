<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
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
<h2>BOOK SECTION</h2>
</center>
<h3><p> <?php echo $_SESSION["username"].", PLEASE SELECT THE TYPE OF BOOK YOU WNAT TO BUY!";?></p></h3>
<center><p><h5>Welcome to page Two.</p></h5></center>



<p><a href="pagethree.php">Types of Books</a></p><br>
 
<p><a href="">Sci-Fiction</a><br></p>
<p><a href="">Thriller</a><br></p>
<p><a href="">Fantasy</a><br></p>
<p><a href="">Biography</a><br></p>
<p><a href="">Drama</a><br></p>
<p><a ></a><br>


<h5><p>Do you want to go to <a href="pagethree.php">nextpage</a></p></h5>

<br/>
 <h5><p>Do you want to <a href="control/logout.php">logout</a></p></h5>

</body>
</html>

<?php


?>   