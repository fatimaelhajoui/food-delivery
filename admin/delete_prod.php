<?php
include('../connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM produit WHERE id_prod=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       
        header("location: liste_produits.php");
        echo "<script>alert('Le produit a été supprimé avec succès')</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>