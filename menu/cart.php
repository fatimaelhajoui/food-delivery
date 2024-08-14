<?php
    session_start();

    //delete button
    if(filter_input(INPUT_GET, 'action') == 'delete'){
    //Loop in the shooping cart until we found the matching value with GET id variable
      foreach($_SESSION['add_to_cart'] as $key=> $product){
        if($product['id'] == $_GET['id']){
          unset($_SESSION['add_to_cart'][$key]);
        }
      }
      //rseset session array key so they match with $product_ids numeric array (like reloading of array )
      $_SESSION['add_to_cart'] = array_values($_SESSION['add_to_cart']);
      echo "<script>
                alert('Product deleted from the  cart');
            </script>" ;
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Josefin+Sans&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <!-- Navbar -->
    <?php
    include 'nav2.php';
    ?>

    <!-- Navbar -->

<div class="container my-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Products</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Totale</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(isset($_SESSION['add_to_cart'])){

     
        $total=0;
        

        foreach($_SESSION["add_to_cart"] as $key => $product){
          $total+=$product['qte']*$product['prix'];
          echo "
          <tr>
          <td>$product[nom]</td>
          <td>$product[qte] </td>
          <td>$product[prix] DH</td>
          <td>".number_format($product['qte']*$product['prix'], 2)." DH</td>
          <td> <a href='cart.php?action=delete&id=$product[id]' class='btn btn-danger' align=right>Delete</a></td>
        </tr>
               "; }

               echo "
               <tr>
               <td colspan=3 align=right >Totale:</td>
               <td align=right>".number_format($total, 2)." DH</td>
             </tr>";

             if(count($_SESSION['add_to_cart'])){
              echo "<tr>
                   <td colspan=4 align=right style='border: none;'><a href='order.php' class='btn btn-success' align=right>Order is valid</a></td>
                 </tr>
                        ";
            }
                 
              }
              
        

       
            
              ?>
  </tbody>
</table>


</div>



</body>

</html>