<?php

session_start(); 

include('../control/dbseller.php');

if(isset($_REQUEST['pendingRequest'])){
    
  if(!empty($_REQUEST['sellerName']) and !empty($_REQUEST['sellerContact'])){
      
      $sellerName=$_REQUEST['sellerName'];
      $sellerContact=$_REQUEST['sellerContact'];
      
  }
  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller - buy pending request</title>
</head>
<body>
    
    <style>
h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
    
    <center>
        
        <u><h1>Pending Request</h1></u>
        
    </center>
    
    



<?php
$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"buyerrequest");

if ($userQuery->num_rows > 0) {
    echo "<center><table border='1'><tr><th>Buyer Name</th><th>Phone Number</th><th>Bookname</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BuyerName"]."</td><td>".$row["BuyerPhoneNumber"]."</td><td>".$row["BookName"]."</td></tr>";
    }
    echo "</table></center>";
  } else {
    echo "0 results";
  }

?>
<hr>

<center>
    
    <form action="../control/seller_deliver.php" method="post">
        
         Order ID : <input type="text" name="orderID"><br><br>
        Buyer Name: <input type="text" name="buyerName"><br><br>
        Phone Number: <input type="text" name="buyerPhoneNumber"><br><br>
        <input type="submit" name="deliver" value="Deliver">
        
    </form>
    
</center>

</body>
</html>

