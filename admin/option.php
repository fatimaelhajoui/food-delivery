<?php
include('../connection.php');
$sql = "SELECT * from categorie";
$result = $con->query($sql);
if($result->num_rows> 0){
  $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
  
    
  
}
else{
    die(mysqli_error($con));
}
?>