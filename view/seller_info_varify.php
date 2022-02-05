<?php
session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller - Home</title>
    <link rel="stylesheet" href="../css/navigation.css">
    <script src="https://kit.fontawesome.com/5a9a8e30c2.js" crossorigin="anonymous"></script>
    <script src="../js/seller_info_varify_password.js"></script>
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
            <li><a href="#"><i class="fas fa-pause-circle"></i>Pending Request</a></li>
            <li><a href="bookinfo.php"><i class="fas fa-warehouse"></i></i>Show Inventory</a></li>
        </ul> 
        
    </div>
<div class="main_content">
    <div class="header"><b>Varification</b></div>  

        <div class="info" id="sellerHome">

        <form action="../control/seller_info_varify_pass.php" onsubmit="return validate()" method="post">
        
        
         
        <label for="password">Enter password: </label><br> 
        <input type="password" id="password" name="password"placeholder="Enter your password"> <p id="mytext"></p> <br>
        <input type="submit" name="varify" value="Verify"><br>
        

          
        </form>


        
        </div>
        
    </div>
</div>
</div>

     
</body>
</html>