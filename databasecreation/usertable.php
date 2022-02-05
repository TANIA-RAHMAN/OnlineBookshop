<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";//including database name as a connection variable
$conn = new mysqli($servername, $username, $password, $dbname);
//below is query string
$qry = "CREATE TABLE Users (
firstname VARCHAR(40) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(10) NOT NULL,
password VARCHAR(10),
address VARCHAR(50) NOT NULL,
phoneno VARCHAR(30) NOT NULL, 
nid INT(50) NOT NULL,
gender VARCHAR(30) NOT NULL,
type VARCHAR(30) NOT NULL,
dob VARCHAR(30) NOT NULL,
imageg VARCHAR(30)
)";
$res = $conn->query($qry);//execute query
if($res)
{ echo "table created successfully"; }
else
{ echo "error occurred"; }
$conn->close();
?>
