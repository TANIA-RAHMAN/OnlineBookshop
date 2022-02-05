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
<link rel="stylesheet" type="text/css" href="../css/dcss.css">
<script >
function showmyuser() {
  var orderid=  document.getElementById("orderid").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      var data=JSON.parse(this.responseText);
        let table="<table><tr><th>Order Id</th><th>Buyer Name</th><th>Buyer Phoneno</th><th>SellerName</th><th>Bookname</th></tr>";
        table+="<tr><td>"+data.OrderId+"</td>"+"<td>"+data.BuyerName+"</td>"+"<td>"+data.BuyerPhoneNumber+"</td>"+"<td>"+data.SellerName+"</td>"+"<td>"+data.BookName+"</td></tr></table>";
      document.getElementById("mytext").innerHTML = table;
      console.log(this.responseText);
    }
	else
	{
		 //document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/bookshop/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("orderid="+orderid);
  }
    function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      //alert('Your Registration number has accepted....');
      //document.form1.text1.focus();
      return true;
      }
      else
      {
      //alert('Please input numeric characters only');
      //document.form1.text1.focus();
      return false;
      }
   }
  function func(){
    var order=document.getElementById("orderId");
    //console.log(order);
    if(order.value== ""){
      alert('Order ID can not be empty');
    }
    else if(!allnumeric(order)){
      alert('Can not contain charecter');
    }
  }
</script>
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
<div>
<h1>Order Page</h1>
</div>
<div>
<tr><th><a href="dguy.php">Delivery Guy Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br>
<label>Find Detail of OrderID: </label>

  <input type="text" id="orderid" onkeyup="showmyuser()">
  

<p id="mytext"></p>
<br/>Pending Orders:

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"buyerrequest");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Order Id</th><th><th> Buyer Name</th><th><th>Buyer Phone no</th><th>Seller Name</th><th>Bookname</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["OrderId"]."</td><td><td>".$row["BuyerName"]."</td><td><td>".$row["BuyerPhoneNumber"]."</td><td>".$row["SellerName"]."</td><td>".$row["BookName"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>
</table>

<div>
  <fieldset style="background-color: rgb(235, 172, 127);">
    <fieldset>			
      <legend align="left"><b>Order Processing Section</b></legend>
        <br>

        <form method="post" action="../databasecreation/orderstatusinput.php"   enctype="multipart/form-data">
        <label for="orderId">Oder ID: </label>
        <input type="text" id= "orderId" name="oderId" required><br>

        <br>
        Status: <select name="status" >
                <option value="Done"  selected >Done</option>
                <option value="Pending">Pending</option><br/>
                </div>
              
        <input type="submit" onclick="func()">
        <hr>
        </fieldset>
        </fieldset>
        </form>
        </div>

</body>
</html>