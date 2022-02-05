<?php
session_start(); 
include('../control/db.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/logout.php"); // Redirecting To Home Page
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
<h1>Delivery Guy Profile Page</h1>
</div>
<div>
<tr><th><a href="dguy.php">Delivery Guy Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/><h4>Your Profile Information are:</h4> 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

if ($userQuery->num_rows > 0) {
  echo "<form action='' method='post'>";
  echo "<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>NID</th><th>Type</th><th>DOB</th>" ;
      while($row = $userQuery->fetch_assoc()) {
      echo "<tr><th>".$row["firstname"]."</th><th>".$row["email"]."</th><th>".$row["address"]."</th><th>".$row["phoneno"]."</th><th>".$row["nid"]."</th><th>".$row["type"]."</th><th>".$row["dob"]."</th><th>";
      
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>


</body>
</html>