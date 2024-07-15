<?php
    session_start();
?>


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
<div class="container my-3">
<form method="POST" action="valid_order.php" class="px-4 py-3" enctype="multipart/form-data">
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" name="first" autocomplete="off" required>

    <label >Last Name:</label>
    <input type="text" class="form-control" name="last"  autocomplete="off" required>

    <label >Phone:</label>
    <input type="text" class="form-control" name="phone"  autocomplete="off" required>

    <label >Adresse:</label>
    <input type="text" class="form-control" name="adresse"  autocomplete="off" required>



    <label >Total:</label>
    <input type="text" class="form-control" name="total"  autocomplete="off" readonly  value=
    <?php if(isset($_SESSION['add_to_cart'])){
        $total=0;
        foreach($_SESSION["add_to_cart"] as $key => $product){
            $total+=$product['qte']*$product['prix'];
        }}
        echo number_format($total, 2)."DH";
         ?>>

    
    
    <?php
    //display a list of the ordered products
if(isset($_SESSION['add_to_cart'])){
    $products = array();
    foreach($_SESSION['add_to_cart'] as $key=>$product){
      $products[] =  $product['nom'] ." : ". $product['qte'];
    }
}else{
    echo "bye";
}

?>
<label >Your Order:</label>
    <textarea class="form-control" rows="5" name="products" readonly ><?php foreach($products as $key=>$value){ echo $value." , "."\n";} ?> </textarea>
    </div>
    <br>
<button type="submit" name="submit" class="btn btn-success">Order</button>
<button type="submit" name="Annuler" class="btn btn-danger"><a href="menu.php" style="text-decoration: none; color:white">Cancel</a></button>

</form>
</div>
</body>
</html>