<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<h2>Home</h2>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to page Three.</h5>


<h5>Do you want to go to <a href="pagefour.php">nextpage</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   
