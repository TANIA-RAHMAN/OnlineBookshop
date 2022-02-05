<?php
include('../control/logincheck.php');
$BookName_error=$BuyerName_error=$BuyerPhoneNumber_error=$SellerName_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["username"])){
    $UserName_error = "username is required Tania";

  }
  if(empty($_POST["password"])){
    $Password_error = "password is required Tania";

  }
  if(empty($_POST["type"])){
    $Type_error = "type is required Tania";

  }
  
}
if(isset($_SESSION['username']) ){
  if($type=="seller")
  {
   header("location: seller_home.php");
  }
  else if($type=="dguy")
  {
   header("location: dguy.php");
  }
  else if($type=="admin")
  {
   header("location: adminhome.php");
  }
  else
  {
   header("location: buyerhome.php");
  }

} 
?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

</head>
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
}
input[type=text], select {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: rgb(99, 43, 4);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: green;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
/*legend*/
legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

legend {font-weight:bold;font-size:larger;size:50%;}

</style>
</head>
<body>



<h1>Welcome To Online Book Shop</h1>
<h2>LOGIN</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><input id="username" type="text" name="username" placeholder="Enter your valid username" ></p>
    <p><input id="password" type="password" name="password" placeholder="Enter you valid password" ></p>
    <p><label id="usernameErr"></label></p>
    <p><label id="passwordErr"></label></p>
    <fieldset>
<legend align="middle" size>User Type</legend>
</tr>
<center>
  <input type="radio" id="admin" name="type" value="admin">
  <label for="admin">Admin</label>
  <input type="radio" id="buyer" name="type" value="buyer">
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller">
  <label for="other">Seller</label>
  <input type="radio" id="dguy" name="type" value="dguy">
  <label for="dguy">Delivery Guy</label>
  </center>
</fieldset>

    <p><input id="login"  name="login" type="submit" value="LOGIN"></p>
    <p><label id="typeErr"></label></p>

</form>
<br>
<h3>Don't you have an account?</h3> 
<p><a href="RegistrationForm.php">REGISTRATION</a></p
>



<br>


</body>
</html>
