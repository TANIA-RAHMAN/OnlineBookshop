<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";//including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);
//below is query string
$qry = "CREATE TABLE confirmtable(
orderId VARCHAR(10) NOT NULL,
status VARCHAR(10) NOT NULL
)";
$res = $conn->query($qry);//execute query
if($res)
{ echo "Table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>
