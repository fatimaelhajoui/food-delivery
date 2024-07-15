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


<link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="nav-bar">
            <nav class="navbar navbar-expand-lg"  style="background-color: #ffffff;">
                <div class="container">
                    <a class="navbar-brand" href="#">Everything Nice</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link " href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="menu/menu.php">Menu</a>
                            </li>
                            
                            
                        </ul>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                
                        <?php
      
      $count=0;
        if(isset($_SESSION['add_to_cart'])){
        $count =count($_SESSION['add_to_cart']);
      }
    
      
      ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><a class="btn btn-outline" style="border-color:#D24545" href="menu/cart.php">My cart (<?php echo $count; ?>)</a></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<!-- Navbar -->

</body>
</html>