<?php
include("../connection.php");

$sql= "DELETE FROM orders WHERE id_order=$_GET[deleteid]";
$result=mysqli_query($con, $sql);
if($result){
    header("location:list_orders.php");
}

?>