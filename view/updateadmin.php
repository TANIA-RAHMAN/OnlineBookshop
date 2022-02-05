<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      

    function validateForm() {
  var isValid;
  var x = document.forms["myForm"]["firstname"].value;
  var x1 = document.forms["myForm"]["email"].value;
  var x2 = document.forms["myForm"]["address"].value;
  var x3 = document.forms["myForm"]["phoneno"].value;
  var x4 = document.forms["myForm"]["nid"].value;
  var x5 = document.forms["myForm"]["dob"].value;
  
  if (x == "" ) {
    
    document.getElementById("errorMsg").innerHTML = "<b>firstname must be filled out.</b>";
    document.getElementById("errorMsg").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg").innerHTML = "";
  }
   if(x1 == "") {

    document.getElementById("errorMsg1").innerHTML = "<b>email must be filled out.</b>";
    document.getElementById("errorMsg1").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg1").innerHTML = "";
  }
  if (x2 == "" ) {
    document.getElementById("errorMsg2").innerHTML = "<b>address must be filled out.</b>";
    document.getElementById("errorMsg2").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg2").innerHTML = "";
  }
  if (x3 == "" ) {
    document.getElementById("errorMsg3").innerHTML = "<b>phoneno name must be filled out.</b>";
    document.getElementById("errorMsg3").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg3").innerHTML = "";
  }
  if (x4 == "" ) {
    document.getElementById("errorMsg4").innerHTML = "<b>nid must be filled out.</b>";
    document.getElementById("errorMsg4").style.color = "red";
    isValid = false
  }
  else{
    document.getElementById("errorMsg4").innerHTML = "";
  }
  if (x5 == "" ) {
    document.getElementById("errorMsg5").innerHTML = "<b>dob must be filled out.</b>";
    document.getElementById("errorMsg5").style.color = "red";
    isValid = false
  }
  

else {
          isValid = true;
        }
return isValid;
}

$('#submitFrom').click(function() 
{

    if(validateForm()){
        var x = document.forms["myForm"]["firstname"].value;
      var x1 = document.forms["myForm"]["email"].value;
      var x2 = document.forms["myForm"]["address"].value;
      var x3 = document.forms["myForm"]["phoneno"].value;
      var x4 = document.forms["myForm"]["nid"].value;
      var x5 = document.forms["myForm"]["dob"].value;
     

var postData = 'firstname=' + x + '&email=' + x1 + '&address=' + x2 + '&phoneno=' + x3 + '&nid=' + x4 + '&dob=' + x5;


    $.ajax({
          url: "../control/admin_update.php",
          type: "POST",
          
          data: postData,
          success: function(data, status, xhr) {
            
          //if success then just output the text to the status div then clear the form inputs to prepare for new data
            
            document.getElementById("ajaxResult").innerHTML = "<b>Admin Updated.</b>";
            // $('#name').val('');
            // $('#percentage').val('');
          },
          error: function(jqXHR, status, errorThrown) {
           
          //if fail show error and server status
            //$("#ajaxResult").html('there was an error ' + errorThrown + ' with status ' + textStatus);
          }
        })
  }
      
});





});

</script>
    <meta charset="UTF-8">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/button.css">

    <script src="https://kit.fontawesome.com/5a9a8e30c2.js" crossorigin="anonymous"></script>
    
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
<!-- tania start-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  font-family: 'Lato', sans-serif;
  background-image: url('background/image3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
a:link, a:visited {
  background-color:  rgb(49, 23, 5);
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
<!-- tania style -->

<!-- tania end -->

</head>

<body>


<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Info</h2>
        <div>
<h1>Update Profile Information</h1>
</div>
<div>
<tr><th><a href="adminhome.php">Admin Home Page</a></th>
<tr><th><a href="../control/logout.php">logout</a></th></div>
        
    </div>
    <div class="main_content">
        <div class="header">Add New Admin</div>  

        <div class="info">
        
           <form onsubmit="return false" name="myForm">
            
            
                
             <legend><b>Admin Registration</b></legend><br> <br><br> <br>
                
             <p id="mytext"></p>

                 First Name: <input type="text" id="firstname" name="firstname"> <p id="errorMsg"></p> <br> <br>
                Email: <input type="text" id="email" name="email"> <p id="errorMsg1"></p> <br> <br>
                Address: <input type="text" id="address" name="address"> <p id="errorMsg2"></p> <br> <br>
                Phone Number: <input type="number" id="phoneno" name="phoneno"> <p id="errorMsg3"></p> <br> <br>
               National ID NO: <input type="number" id="nid" name="nid"> <p id="errorMsg4"></p> <br><br>
                Date Of Birth: <input type="date" id="dob" name="dob"> <p id="errorMsg5"></p> <br><br>
                
                <!-- <input id="submitFrom" type="submit" name="add" value="Add Admin"> -->
                <button id="submitFrom" type="submit" name="add">Update</button>
                <button type="Reset" >Reset</button>
                <p id="ajaxResult"></p>

            
           </form>
           <p id="errorMsg"></p>
        </div>
        
    </div>
</div>
</body>
</html>