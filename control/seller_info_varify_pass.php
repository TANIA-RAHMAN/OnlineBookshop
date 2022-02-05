<?php
session_start();
if(isset($_REQUEST['varify'])){


    if(!empty($_REQUEST['password']) && $_REQUEST['password']==$_SESSION["password"])
    {
        header("location: ../view/seller_info_update.php");
    }
    else
    {
        echo "enter correct password";   
    }
   
}

?>