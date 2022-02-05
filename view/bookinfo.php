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
<link rel="stylesheet" href="../css/navigation.css">
	<script src="https://kit.fontawesome.com/5a9a8e30c2.js" crossorigin="anonymous"></script>

<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}


h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Book Shop</h2>
        <ul>
            <li><a href="seller_home.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="seller_add_book.php"><<i class="fas fa-book"></i>Add Book</a></li>
            <li><a href="../databasecreation/orderinfos.php"><i class="fas fa-pause-circle"></i>Pending Request</a></li>
            <li><a href="bookinfo.php"><i class="fas fa-warehouse"></i></i>Show Inventory</a></li>
            <li><a href="seller_book_info_update.php">Edit</a></li>
            <li>Delete</li>
            <li><a href="../control/logout.php">logout</a></li>
        </ul> 
        
    </div>

    <div class="main_content">
      <div class="header">Inventory</div>  
          <div class="info">

          <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Genre</th><th>Book Price</th><th>Book Published date</th><th>Seller Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BookID"]."</td><td>".$row["BookName"]."</td><td>".$row["Author"]."</td><td>".$row["Publication"]."</td><td>".$row["Genre"]."</td><td>".$row["BookPrice"]."</td><td>".$row["BookPublished"]."</td><td>".$row["SellerName"]."</td><td>";
    }
    echo "</table>";

  } else {
    echo "0 results";
  }


?>


          </div>
        
        </div>

    </div>

<br/>
<br/>
<br/>

<br/>


</body>
</html>