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
        let table="<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>National Id</th></tr>";
        table+="<tr><td>"+data.firstname+"</td>"+"<td>"+data.email+"</td>"+"<td>"+data.address+"</td>"+"<td>"+data.phoneno+"</td>"+"<td>"+data.nid+"</td></tr></table>";
      document.getElementById("mytext").innerHTML = table;
      console.log(this.responseText);
    }
	else
	{
		 //document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/bookshop/control/getinfouser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("orderid='"+orderid+"'");
  }
    
  /* function func(){
    var order=document.getElementById("orderId");
    //console.log(order);
    if(order.value== ""){
      alert('Order ID can not be empty');
    } */
    
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
<h1>User Infos(for future update)</h1>
</div>
<div>
<tr><th><a href="adminhome.php">Admin Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br>
<label>Enter username to search: </label>

  <input type="text" id="orderid"  name="orderid">
  <input type="button" onclick="showmyuser()" value="search">
  

<p id="mytext"></p>
<br/>

</body>
</html>