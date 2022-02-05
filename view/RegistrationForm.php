<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script src="../js/styletext.css"></script>
<script>
   function validation() {
    var firstname=document.getElementsByName("firstname")[0].value;
    var email=document.getElementsByName("email")[0].value;

    var username=document.getElementsByName("username")[0].value;
    var password=document.getElementsByName("password")[0].value;
    var cpassword=document.getElementsByName("cpassword")[0].value;
    var address=document.getElementsByName("address")[0].value;
    var phoneno=document.getElementsByName("phoneno")[0].value;
    var nid=document.getElementsByName("nid")[0].value;

  if (firstname == ""||firstname==null)
  {
    alert("Enter the name please!");
  }
  else if(email==""||email==null)
  {
    alert("Enter valid email address please!");

  }
  else if(username==""||username==null)
  {
    alert("Enter valid username please!");

  }
  else if (password =="" || password.length<6) {
        alert("Please enter at least 6 digit password");
    }
  else if (cpassword =="" || cpassword.length<6) {
        alert("Please enter at least 6 digit password");
    }
    else if (address == null || address == "") {
        alert("Enter the address please!");
        return false;
    }
    else if (phoneno== null || phoneno == "") {
        alert("Enter the phone number please!");
        return false;
    }
    else if (nid == null || nid == "") {
        alert("Enter the National id card number!");
        return false;
    }

// if(true)
// {
//   var button = document.getElementById('submitbtn');
//   button.form.submit();
// }
 
}
</script>

<!-- <link href ="../css/frontback.css" rel="StyleSheet" type="text/css"> -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
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
input[type=email], select {
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
input[type=number], select {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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



</style>
</head>
<br>

  <fieldset>
  <fieldset>			
<legend align="left"><b> REGISTRATION</b></legend>
<br>
<tr>
<form name="myform" method="post" action="../databasecreation/userinput.php"   enctype="multipart/form-data">
<td><label for="firstname">First Name:</label></td> 
<td><input type="text" name="firstname"><br></td>
</tr>

<hr>
<tr>
<td><label for="email">Email:</label></td>
<td><input type="email" name="email"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="uname">User Name:</label></td>
<td><input type="text" name="username"placeholder="Example:xxx2626"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="passwor">Password:</label></td>
<td><input type="password" name="password"placeholder="At least 6 digit"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="cpass">Confirm Password:</label></td>
<td><input type="password" name="cpassword"></td><?php if(isset($_SESSION["wrong"])){echo $_SESSION["wrong"];unset($_SESSION["wrong"]);} ?>
</tr>
<br>
<hr>
<tr>

<fieldset>
<td><label for="address">Address:</label></td>
<td><input type="text" name="address"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="phoneno">Phone number:</label></td>
<td><input type="number" name="phoneno"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="nid">National Id no:</label></td>
<td><input type="number" name="nid"></td>
</fieldset>
<hr>
<fieldset>
<legend align="left">Gender</legend>
</tr>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</fieldset>
<hr>
<fieldset>
<legend align="left">Type of user</legend>
</tr>
<input type="radio" id="buyer" name="type" value="buyer">
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller">
  <label for="seller">Seller</label>
  <input type="radio" id="dguy" name="type" value="dguy">
  <label for="dguy">Delivery Guy</label>
</fieldset>

<hr>

<fieldset>
  <legend align="left">Date of Birth</legend>
  <input type="date" name="dob"><label for="Name" required></label>
  </fieldset>
  <hr>
<fieldset>
<legend align="left">Profile Picture</legend> 
<label for="img">Profile Pic:</label>
<input type="file" enctype="multipart/form-data" name="image" id="img" required>
</fieldset>
<hr>
<fieldset>
<br>
<button id="submitbtn" onclick="validation()">submit</button>
<input type="Reset"> <br>
<br/>
<tr><th><a href="login.php">Go to login page</a></th>
<!-- <input style="display.none;" type="submit"> -->

</form> 
</table>
</table>
</table>

</head>
</html>
</form>
