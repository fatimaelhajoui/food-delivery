<?php
include('../connection.php');
include('option.php');
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}

//display items in the inputs
$id=$_GET['updateid'];
$sql="SELECT * FROM produit WHERE id_prod=$id";
$res=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
$nom_prod=$row['nom_prod'];
$prix=$row['prix'];
$image=$row['image'];
$id_cat=$row['id_cat'];
$description=$row['description'];

//update the intems by what we change in the inputs
if(isset($_POST['submit'])){

  $nom_prod= $_POST['name'];
  $prix=$_POST['prix'];
  $id_categorie=$_POST['categorie'];
  $description=$_POST['text'];


  $folder = "uploads/";
  $image_file_new=$_FILES['fileToUpload']['name'];
   $file = $_FILES['fileToUpload']['tmp_name'];
   $path = $folder . $image_file_new;  
   $target_file=$folder.basename($image_file_new);
   $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
  //Allow only JPG, JPEG, PNG & GIF etc formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
    echo"<script>
      alert('Seul le format jpg / jpeg/ png est autorisé')
      </script>";
  }
  //Set image upload size 
      if ($_FILES["fileToUpload"]["size"] > 1048576) {
        echo"<script>
        alert('Désolé, votre image est trop grande. Téléchargez une taille inférieure à 1 MB KB.')
        </script>";
  }
  
  else{ 
    if(empty($image_file_new)){
      $image_file_new=$image;
    }
    $query="UPDATE produit set
    nom_prod='$nom_prod',
    prix=$prix,
    id_cat=$id_categorie,
    image='$image_file_new',
    description='$description' 
    WHERE id_prod=$id limit 1";
  $result=mysqli_query($con,$query);
  if($result){
      echo"<script>
      alert('Le produit modifié avec succès')
      </script>";
      header('location: liste_produits.php');
  }
  else{
      die(mysqli_error($con));
  }
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
<form method="post" class="px-4 py-3" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nom-produit:</label>
    <input type="text" class="form-control" name="name" placeholder="Entrer le nom de categorie" autocomplete="off" value="<?php echo $nom_prod ?>">

    <label >Prix:</label>
    <input type="text" class="form-control" name="prix" placeholder="Entrer le prix de categorie" autocomplete="off" value="<?php echo $prix ?>">

    <label>Image: </label><br>
	  <img src="../uploads/<?php echo $image;?>" height="100"><br>
    <label>Changer Image :</label>
    <input class="form-control" type="file"  name="fileToUpload" id="fileToUpload" >
    <span style="color:red; font-size:12px;">Seul le format jpg / jpeg/ png est autorisé.</span>
<br>
    <label >Categories:</label>
<select class="form-control" aria-label="Default select example" name="categorie">
  <!-- dispaly name and id categorie -->
<?php 
$sql="SELECT * FROM categorie WHERE id_cat=$id_cat";
$res=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
$nom_cat=$row['nom_cat'];
?>
<option value="<?php echo $id_cat ?>" selected  ><?php echo $nom_cat ?></option>

<!-- dispaly list categorie -->
<?php

foreach ($options as $option){
  ?>
  
  <option value="<?php echo $option['id_cat']; ?>"><?php echo $option['nom_cat']; ?></option>
  <?php }?>
</select>

<label>Description:</label>
  <textarea class="form-control" rows="4" name="text" ><?php echo $description ?></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-success">Modifier Le Produit</button>
  <button type="submit" name="Annuler" class="btn btn-danger"><a href="liste_produits.php" style="text-decoration: none; color:white">Annuler</a></button>
</form>
    </div>

     </body>
</html>