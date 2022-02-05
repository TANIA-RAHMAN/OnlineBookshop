<?php
include('dbseller.php');



        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->insert($conn, "inventory", $_POST['bookId'], $_POST['bookName'], $_POST['bookAuthor'],
                           $_POST['bookPublication'], $_POST['bookGenre'], $_POST['bookPrice'], $_POST['bookPublished'], 
                           $_POST['sellerName']);
        
  
  

?>