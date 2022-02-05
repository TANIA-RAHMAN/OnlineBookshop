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
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="seller_add_book.php"><<i class="fas fa-book"></i>Add Book</a></li>
            <li><a href="../databasecreation/orderinfos.php"><i class="fas fa-pause-circle"></i>Pending Request</a></li>
            <li><a href="bookinfo.php"><i class="fas fa-warehouse"></i></i>Show Inventory</a></li>
        </ul> 
        
    </div>
<div class="main_content">
    <div class="header">Profile Info</div>  

        <div class="info" id="sellerHome">

        <form action="seller_info_varify.php" method="post">
        
        &nbsp;&nbsp;<b>Username:</b>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["username"]?> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerEmail?><br>
        <b>Contact No:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerContact ?><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Gender:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerGender?> <br>
        <b>National ID:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerNID?><br>
        &nbsp;&nbsp;&nbsp;<b>User Type:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerType ?><br>
        <b>Date of Birth:</b>&nbsp;&nbsp;&nbsp;<?php echo $sellerDOB?><br><br>
        <input type="submit" name="change" value="Change Info">
        <br>
        <a href="../control/logout.php">logout</a>

          
        </form>


        
        </div>
        
    </div>
</div>
</div>

     
</body>
</html>