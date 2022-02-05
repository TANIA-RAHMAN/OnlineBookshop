<?php 

include('../control/dbseller.php');
session_start(); 
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

   $sellerName=$_SESSION["username"];
if ($userQuery->num_rows > 0) {

// output data of each row
while($row = $userQuery->fetch_assoc()) {
    
    $sellerEmail=$row["email"];
    $sellerContact =$row["phoneno"];
    $sellerNID=$row["nid"];
    $sellerGender =$row["gender"];
    $sellerType=$row["type"];
    $sellerDOB =$row["dob"];  
}

} else {
echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
function validateForm() {
  var isValid;
  var a = document.forms["myForm"]["email"].value;
  var a1 = document.forms["myForm"]["contact"].value;
  var a2 = document.forms["myForm"]["gender"].value;
  var a3 = document.forms["myForm"]["nid"].value;
  var a4 = document.forms["myForm"]["type"].value;
  var a5 = document.forms["myForm"]["dob"].value;
  if (a == "" ) {
    document.getElementById("errorMsg").innerHTML = "<b>email must be filled out.</b>";
    document.getElementById("errorMsg").style.color = "red";
    isValid=false
  }
    if(a1 == "") {
    document.getElementById("errorMsg1").innerHTML = "<b>contact must be filled out.</b>";
    document.getElementById("errorMsg1").style.color = "red";
    isValid=false
  }
   if (a2 == "" ) {
    document.getElementById("errorMsg2").innerHTML = "<b>gender must be filled out.</b>";
    document.getElementById("errorMsg2").style.color = "red";
    isValid=false
  }
  if (a3 == "" ) {
    document.getElementById("errorMsg3").innerHTML = "<b>nid must be filled out.</b>";
    document.getElementById("errorMsg3").style.color = "red";
    isValid=false
  }
   if (a4 == "" ) {
    document.getElementById("errorMsg4").innerHTML = "<b>type must be filled out.</b>";
    document.getElementById("errorMsg4").style.color = "red";
    isValid=false
  }
   if (a5 == "" ) {
    document.getElementById("errorMsg5").innerHTML = "<b>dob must be filled out.</b>";
    document.getElementById("errorMsg5").style.color = "red";
    isValid=false
  }

else {
          isValid = true;
        }
return isValid;

}
</script>

    <meta charset="UTF-8">
    <title>Seller - Home</title>
    <link rel="stylesheet" href="../css/navigation.css">
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
   
</head>

<body>
    

<div class="wrapper">
    <div class="sidebar">
        <h2>Book Shop</h2>
        <ul>
            <li><a href="seller_home.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="seller_add_book.php"><<i class="fas fa-book"></i>Add Book</a></li>
            <li><a href="../databasecreation/orderinfos.php"><i class="fas fa-pause-circle"></i>Pending Request</a></li>
            <li><a href="bookinfo.php"><i class="fas fa-warehouse"></i></i>Show Inventory</a></li>
        </ul> 
        
    </div>
<div class="main_content">
    <div class="header">Upate Profile Info</div>  

        <div class="info" id="sellerHome">

        <form action="../control/seller_update_info.php "onsubmit="return validateForm()" method="post" name="myForm">
        
        &nbsp;&nbsp;<b>Username:</b>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["username"]?> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email:</b>&nbsp;&nbsp;&nbsp;<input type="text" id="email" name="email" value=<?=$sellerEmail?>> <p id="errorMsg"></p> <br>
        <b>Contact No:</b>&nbsp;&nbsp;&nbsp;<input type="text" id="contact" name="contact" value=<?=$sellerContact ?>> <p id="errorMsg1"></p> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Gender:</b>&nbsp;&nbsp;&nbsp;<input type="text" id="gender" name="gender" value=<?=$sellerGender?>> <p id="errorMsg2"></p> <br>
        <b>National ID:</b>&nbsp;&nbsp;&nbsp;<input type="text" id="nid" name="nid" value=<?=$sellerNID?>> <p id="errorMsg3"></p> <br>
        &nbsp;&nbsp;&nbsp;<b>User Type:</b>&nbsp;&nbsp;&nbsp;<input type="text" id="type" name="type" value=<?=$sellerType ?>> <p id="errorMsg4"></p> <br>
        <b>Date of Birth:</b>&nbsp;&nbsp;<input type="text" id="dob" name="dob" value=<?=$sellerDOB?>> <p id="errorMsg5"></p> <br><br>
        <input type="submit" name="change" value="Confirm Change">

          
        </form>


        
        </div>
        
    </div>
</div>
</div>

     
</body>
</html>