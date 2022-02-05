<?php
    $conn= new mysqli("localhost","root","","bookshop");


    function execute($sql)
    {
        global $conn;
        $res= $conn->query($sql);
        return $res;
    }
   
?>