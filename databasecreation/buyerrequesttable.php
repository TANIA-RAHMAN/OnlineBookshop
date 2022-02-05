<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";//including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);
//below is query string
$qry = "CREATE TABLE buyerrequest(
OrderId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
BuyerName VARCHAR(40) NOT NULL,
BuyerPhoneNumber VARCHAR(30) NOT NULL,
SellerName VARCHAR(10) NOT NULL,
BookName VARCHAR(10)
)";
$res = $conn->query($qry);//execute query
if($res)
{ echo "Table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>
