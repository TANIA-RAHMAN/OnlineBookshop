

<?php
include('dbuser.php');



        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->insert($conn, "users", $_POST['firstname'], $_POST['email'], $_POST['address'],
                           $_POST['phoneno'], $_POST['nid'], $_POST['dob']);
        
  
  

?>