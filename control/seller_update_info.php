<?php
session_start(); 
include('dbseller.php');
if(isset($_REQUEST['change'])){
    
    if(!empty($_REQUEST['email']) and !empty($_REQUEST['contact'])
      and !empty($_REQUEST['gender']) and !empty($_REQUEST['nid']) and !empty($_REQUEST['type'])
      and !empty($_REQUEST['dob'])){
        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->update($conn, "users",$_SESSION["username"], $_REQUEST['email'], $_REQUEST['contact'],
                           $_REQUEST['gender'], $_REQUEST['nid'], $_REQUEST['type'], $_REQUEST['dob']);
        header("location:../view/seller_home.php");
        
    }
    
}

?>