<?php
class db{
	function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bookshop"; //bookshop
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function update($conn, $inventory, $bookId, $bookName, $bookAuthor, $bookPublication, $bookGenre, $bookPrice, $bookPublished, $sellerName){
    
   
    
    $sql = "UPDATE $inventory SET BookID='$bookId',BookName='$bookName',Author='$bookAuthor',Publication='$bookPublication',Genre='$bookGenre',BookPrice='$bookPrice',BookPublished='$bookPublished',SellerName='$sellerName' WHERE BookID='$bookId'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
    
    
    
}
 function CheckBook($conn,$inventory,$bookId)
 {
$result = $conn->query("SELECT * FROM ". $inventory." WHERE BookID='". $bookId);
 return $result;
 }
}

if(isset($_REQUEST['change'])){
    
    if(!empty($_REQUEST['bookId']) and !empty($_REQUEST['bookName'])
      and !empty($_REQUEST['bookAuthor']) and !empty($_REQUEST['bookPublication']) and !empty($_REQUEST['bookGenre'])
      and !empty($_REQUEST['bookPrice']) and !empty($_REQUEST['bookPublished']) and !empty($_REQUEST['sellerName'])){
        
        $connection = new db();
        $conn=$connection->OpenCon();


$userQuery=$connection->CheckUser($conobj,"inventory",$_SESSION["bookId"],$_SESSION["bookName"],$_SESSION["bookAuthor"]);

        $connection->update($conn, "inventory",$_SESSION["bookId"], $_REQUEST['bookName'], $_REQUEST['bookAuthor'],
                           $_REQUEST['bookPublication'], $_REQUEST['bookGenre'], $_REQUEST['bookPrice'], $_REQUEST['bookPublished'],$_REQUEST['sellerName']);
        header("location:../view/seller_home.php");
}
session_start();

}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/navigation.css">
	<script src="https://kit.fontawesome.com/5a9a8e30c2.js" crossorigin="anonymous"></script>
	<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}


h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
	<style>
		body{background-color: whitesmoke}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;

		}
	</style>
	<title>Update</title>
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
            <li><a href="seller_book_info_update.php">Edit</a></li>
            <li>Delete</li>
            <li><a href="../control/logout.php">logout</a></li>
        </ul>
		</div>
	</div>
<center>
	<h1>Update Book Info</h1>
	<form action="" method="POST">
		<input type="text" id="bookId" name="bookId" placeholder="Enter bookId"> <br>
		<input type="text" id="bookName" name="bookName" placeholder="Enter bookName"> <br>
		<input type="text" id="bookAuthor" name="bookAuthor" placeholder="Enter bookAuthor"> <br>
		<input type="text" id="bookPublication" name="bookPublication" placeholder="Enter bookPublication"> <br>
		Genre: <select name="bookGenre" id="bookGenre">
				<option value="Biography"  </option>
				<option value="Thriller">Thriller</option>
				<option value="Drama">Drama</option>
				<option value="Sci-Fiction">Sci-Fiction</option>
				<option value="Fantasy">Fantasy</option>
            
               </select> <br>
        <input type="number" id="bookPrice" name="bookPrice" placeholder="Enter bookPrice"> <br>
        <input type="date" id="bookPublished" name="bookPublished" placeholder="Enter bookPublished"> <br>
        <input type="text" id="sellerName" name="sellerName" value=<?=$_SESSION["username"]?> > <br>
        <input type="submit" name="change" value="UPDATE INFO">


	</form>
</center>
</body>
</html>