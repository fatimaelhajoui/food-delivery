<?php
include('../connection.php');
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
    $orderid=$_GET['orderid'];
    $sql="SELECT * FROM orders WHERE id_order = $orderid";
    $result=mysqli_query($con,$sql);
    $row =mysqli_fetch_assoc($result);
    if($row){
        $id= $row['id_order'];
    $first_name= $row['first_name'];
    $last_name= $row['last_name'];
    $phone= $row['phone'];
    $adresse= $row['adresse'];
    $total= $row['total'];
    $products= $row['products'];
    $date_time= $row['date_time'];

    
    }
    else{
        die(mysqli_error($con));
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Form</title>
  </head>
  <body>
    <div class="container my-5">
<form method="post" class="px-4 py-3">

  <div class="form-group">
    
  <h3 style="color: #feab00;">Client Info:</h3>
    <label style="font-weight: bold;" >First Name: </label> <?php echo $first_name."\n"; ?>
    <br>
    <label style="font-weight: bold;">Last Name: </label> <?php echo $last_name."\n" ?>
    <br>
    <label style="font-weight: bold;">Phone: </label> <?php echo $phone."\n" ?>
    <br>
    <label style="font-weight: bold;">Adresse: </label> <?php echo $adresse."\n" ?>
    <br>
    <br>
    <h3 style="color: #feab00;">Order Info:</h3>
    <label style="font-weight: bold;" >Order Number: </label> <?php echo $id."\n"; ?>
    <br>
    <label style="font-weight: bold;" >Price: </label> <?php echo $total."\n"; ?>
    <br>
    <label style="font-weight: bold;">Order et Quantity: </label> <?php echo $products ?>

  </div>

 
</form>
    </div>

     </body>
</html>