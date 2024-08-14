<?php 

include('../connection.php');

$sql ="UPDATE orders set confirmed=1 WHERE id_order=$_GET[id]";
$result=mysqli_query($con,$sql);
if($result){
    header("location:list_orders.php");
}
else{
    echo "Problem: Error 404";
}
?>