<?php
include('../connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!----------foont------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Kanit:wght@500;600&family=Lato:wght@400;700&family=Roboto:wght@100&family=Ubuntu:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="menu.css">

    <title>Menu</title>
</head>
<body>
    <!-- Navbar -->
    <?php
    session_start();
include 'nav2.php';
?>

<!-- Navbar -->
 <!-- Background image -->
 <section class="header">

        <div class="hero">
            <h1>Everything Nice</h1>
            <h3>Order your food now: We have prepared a large and varied menu for you!</h3>
        </div>

    </section>

<!-- Background image -->

<div class="container my-3">
  <h1 style="color: #feab00;">Categorie</h1>
<button class="btn btn-light" onclick="myFunction()">Cacher / Afficher</button>
<br><br>
<div id="myDIV">
<?php
$sql = "SELECT * from categorie";
$result = $con->query($sql);
if($result->num_rows> 0){
  $categories= mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  foreach ($categories as $categorie){
?>

<a class="btn btn-outline-warning my-2" href="bycategory.php?catid=<?php echo $categorie['id_cat'];?>" >
<?php echo $categorie['nom_cat'];?></a>
<?php
  }  
}
else{
    die(mysqli_error($con));
}
?>
<div class="container mt-5">
<h2 style="color: #feab00;"> <i class='	fas fa-pizza-slice'></i>Tous Les Produits</h2>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4"">
<?php include("tous.php") ?>
</div>
</div>
</div>


<script>
  function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>