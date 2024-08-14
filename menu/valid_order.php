

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>


 <!-- Latest compiled and minified CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Josefin+Sans&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div class="container my-5">
<?php
session_start();
include("../connection.php");

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $phone=$_POST['phone'];
    $adresse=$_POST['adresse'];
    $total=$_POST['total'];
    $products=$_POST['products'];

    date_default_timezone_set('Africa/Casablanca');
    $date = date('Y-m-d H:i:s');
    
    // echo $first." - ".$last." - ".$phone." - ".$adresse." - ".$total." - ".$products;
    $sql="INSERT INTO orders (first_name, last_name, phone, adresse, total, products, date_time) 
    VALUES('$first','$last','$phone','$adresse','$total','$products','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "
        <center><img src='../like2.png' width='200px' >
        <h1 style='color: #feab00;'>Your order is Confirmed!</h1>
        <button type='submit' name='Annuler' class='btn btn-success'><a href='menu.php' style='text-decoration: none; color:white'>Back to Menu</a></button>

        </center>";
        session_destroy();
    }
    else{
        die(mysqli_error($con));
    }
}else{
    
echo "BYE";
}
?>


</div>
</body>
</html>