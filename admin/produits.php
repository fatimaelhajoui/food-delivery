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


if(isset($_POST['submit'])){

    $nom_prod= $_POST['name'];
    $prix=$_POST['prix'];
    $id_categorie=$_POST['categorie'];
    $description=$_POST['text'];
    // $image=$_FILES["fileToUpload"]["name"];
    // $tmpName=$_POST['file']['tmp_name'];


    // $fileinfo=PATHINFO($_FILES["file"]["name"]);
		// $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		// move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $newFilename);
		// $location="upload/" . $newFilename;
    // $newfilename=uniqid() . "-" .$filename;

    $folder = "uploads/";
    $image_file=$_FILES['fileToUpload']['name'];
     $file = $_FILES['fileToUpload']['tmp_name'];
     $path = $folder . $image_file;  
     $target_file=$folder.basename($image_file);
     $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
    //Allow only JPG, JPEG, PNG & GIF etc formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
     $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
    }
    //Set image upload size 
        if ($_FILES["fileToUpload"]["size"] > 1048576) {
       $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
    }
    
    else{ 
$query="INSERT INTO produit(nom_prod,prix,id_cat,image,description) 
VALUES('$nom_prod',$prix,$id_categorie,'$image_file','$description')";
    $result=mysqli_query($con,$query);

    if($result){
        echo"<script>
        alert('Le produit enregistrée avec succès')
        </script>";
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
    <input type="text" class="form-control" name="name" placeholder="Entrer le nom de categorie" autocomplete="off">

    <label >Prix:</label>
    <input type="text" class="form-control" name="prix" placeholder="Entrer le prix de categorie" autocomplete="off">

    <label>Image:</label>
    <input class="form-control" type="file"  name="fileToUpload" id="fileToUpload">
    <span style="color:red; font-size:12px;">Seul le format jpg / jpeg/ png /gif est autorisé.</span>
<br>
    <label >Categories:</label>
<select class="form-control" aria-label="Default select example" name="categorie">
<option selected>slection le categorie de produit</option>
<?php
foreach ($options as $option){
  ?>
  
  <option value="<?php echo $option['id_cat']; ?>"><?php echo $option['nom_cat']; ?></option>
  <?php }?>
</select>

<label>Description:</label>
  <textarea class="form-control" rows="4" name="text"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-success">Enregistrer</button>
  <button type="submit" name="Annuler" class="btn btn-danger"><a href="liste_produits.php" style="text-decoration: none; color:white">Annuler</a></button>
</form>
    </div>

     </body>
</html>