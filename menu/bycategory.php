<?php
include('../connection.php');
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
        <h1 style="color: #feab00;"><?php 
        
        
$id = $_GET['catid'];
$sql="SELECT * FROM categorie where id_cat=$id";
$res=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
$nom_cat=$row['nom_cat'];
        
    echo $nom_cat;    
        ?></h1>


        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4"">
        
            <?php
            
     $id=$_GET['catid'];       
    $sql="SELECT * FROM produit  where id_cat=$id";
    $res=mysqli_query($con,$sql);
  
        
 while ($row = mysqli_fetch_assoc($res)) {
    $id_prod = $row['id_prod'];
  $nom_prod = $row['nom_prod'];
  $prix = $row['prix'];
  $image = $row['image'];
  $description=$row['description'];
  echo '
       
            
            
  <div class="col">
  <div class="card h-100">
    <img src="../uploads/'.$image.'" class="card-img-top"
      alt="Hollywood Sign on The Hill" height="200"/>
    <div class="card-body">
      <h5 class="card-title">' . $nom_prod . '</h5>
      <h5 class="card-text">
      ' . $prix . ' Dh
      </h5>
      <a class="btn btn-warning"  name="Add_To_Cart" href="dispaly.php?prodid='.$id_prod.'"  
      style="font-size:20px; color:white;">Plus <i class="fas fa-arrow-circle-right" style="font-size:20px; color:white;"></i>
      </a>
    </div>
  </div>
</div>

      ';
 }
            
            ?>

</div>
</div>
</div>




</body>
</html>