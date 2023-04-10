<?php
ob_start();
session_start();
$con=new mysqli("localhost","root","","hotel");
if(mysqli_connect_error())
{
    die("not connected". mysqli_connect_errno().mysqli_connect_error());
}

  
?>  