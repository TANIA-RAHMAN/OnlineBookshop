<?php
include('db.php');

$orderid = $_POST['orderid'];

/*if($orderid=="")
{
    echo "0 results";
}
*/
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetOrderidByOrderid($conobj,"buyerrequest",$orderid );



if ($MyQuery->num_rows > 0) {
  echo json_encode($MyQuery->fetch_assoc());
  /*echo "<table style="."color:black;"."><tr><th>Order Id</th><th><th> Buyer Name</th><th><th>Buyer Phone no</th><th>Seller Name</th><th>Bookname</th>";
  // output data of each rowth
  while($row = $MyQuery->fetch_assoc()) {
    echo "<tr><td>".$row["OrderId"]."</td><td><td>".$row["BuyerName"]."</td><td><td>".$row["BuyerPhoneNumber"]."</td><td>".$row["SellerName"]."</td><td>".$row["BookName"]."</td><td>";
  }
    echo "</table>";
  } else {
    echo "0 results";*/
  }

