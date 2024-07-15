<?php
include('../connection.php');
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
if(isset($_POST['submit'])){
    $nom_cat= $_POST['name'];
    $sql="INSERT INTO categorie (nom_cat) VALUES('$nom_cat')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<script>
        alert('La catégorie enregistrée avec succès')
        </script>";
    }
    else{
        die(mysqli_error($con));
    }


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
    <label >Nom-Categorie:</label>
    <input type="text" class="form-control" name="name" placeholder="Entrer le nom de categorie" autocomplete="off">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Enregistrer</button>
  <button type="submit" name="Annuler" class="btn btn-danger"><a href="liste_categories.php" style="text-decoration: none; color:white">Annuler</a></button>
</form>
    </div>

     </body>
</html>