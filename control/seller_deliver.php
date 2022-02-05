<?php

include('dbseller.php');
if(isset($_REQUEST['deliver'])){
    
    if(!empty($_REQUEST['orderID']) and !empty($_REQUEST['buyerName']) and !empty($_REQUEST['buyerPhoneNumber'])
      and !empty($_REQUEST['sellerName']) and !empty($_REQUEST['sellerContact'])){
        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->insert();
        
    }
    
}


?>