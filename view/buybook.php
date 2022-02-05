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
}}
</style>
</head>
<body>
<h2>Book Lists</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>All available books: 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th><th>Book Name</th><th><th>Author</th><th>Publication</th><th>Genre</th><th>Book Price</th><th><th>Published date</th><th><th>Seller Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BookID"]."</td><td><td>".$row["BookName"]."</td><td><td>".$row["Author"]."</td><td>".$row["Publication"]."</td><td>".$row["Genre"]."</td><td>".$row["BookPrice"]."</td><td><td>".$row["BookPublished"]."</td><td><td>".$row["SellerName"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>
<br>

  <fieldset>
  <fieldset>			
<legend align="left"><b> Buy Book</b></legend>
<br>
<tr>
<form method="post" action="../databasecreation/buyerrequest.php"   enctype="multipart/form-data">
<td><label for="BookName">Book Name: </label></td> 
<td><input type="text" name="BookName" required><br></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerName">Buyer Name:</label></td>
<td><input type="text" name="BuyerName" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerPhoneNumber">Buyer Phone no:</label></td>
<td><input type="text" name="BuyerPhoneNumber" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="SellerName">Seller Name</label></td>
<td><input type="text" name="SellerName" required></td>
</tr>

<input type="submit">
<br/>

<br/>
<a href="buyerhome.php">Go to buyer home page</a>
<br/>
<br/>

<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>