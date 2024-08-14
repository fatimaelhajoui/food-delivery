<?php
include('../connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM categorie WHERE id_cat=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: liste_categories.php');

        echo"<script>
        alert('La catégorie supprimée avec succès')
        </script>";
    }
    else{

        echo"<script>
        alert('vous pouvez pas supprimée cette categorie')
        </script>";
        echo("<script>window.location = 'liste_categories.php';</script>");

    }
    

}
?>