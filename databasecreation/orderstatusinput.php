
<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('../view/background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h2>Order Status Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";

$orderIdno=$_POST["oderId"];
if($orderIdno=="" || !preg_match('/^[0-9]*$/',$orderIdno)){
header("location: ../view/orderstatus.php");
}
$status= $_POST["status"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO confirmtable (orderId,status)
VALUES ('$orderIdno','$status')";
$res = $conn->query($sql);//execute query
if($res)
{ echo "Delivery report added successfully!";}
else
{ echo "error occurred"; }
$conn->close();

?>

<br/>
<br/>
<br/>
<a href="../view/dguy.php">Go to previous page</a>
<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>