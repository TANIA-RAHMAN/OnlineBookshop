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
/* h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('../view/background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
} */
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('../view/background/image2.jpg');
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
<h2>Order Information Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>Oders: 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"confirmtable");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Order ID</th><th>Status</th><th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["orderId"]."</td><td>".$row["status"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>

<br/>
<div>
  

<tr><th><a href="../view/seller_home.php">Home page</a></th>

<tr><th><a href="../control/logout.php">logout</a></th>
</div>


</body>
</html>