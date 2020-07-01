<?php
    $conn=new mysqli('localhost','root','','hospital_management');
    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
?>