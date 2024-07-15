<?php
$con = new mysqli('localhost','root','','food_delivery');
if(!$con)
{
    die(mysqli_error($con));
}
?>