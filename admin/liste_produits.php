<?php
include('../connection.php');
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		
	<?php include('sidebar.php')?>

	
		<div class="content">
        <h2>Produits Page</h2>
        <div class="container">
        <button class="btn btn-dark my-5"><a href="produits.php" class="text-light" style="text-decoration: none;">Ajouter Produit</a></button>
        <table class="table">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID Produit</th>
                    <th scope="col">Nom Produit</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php

#query
$sql = 'SELECT * FROM produit';

#execute query
$result = mysqli_query($con, $sql);

if ($result) {
    #output data each row
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id_prod'];
        $nom_prod = $row['nom_prod'];
        $prix = $row['prix'];
        $image = $row['image'];

        echo '<tr>
    <td>' . $id . '</td>
    <td>' . $nom_prod . '</td>
    <td>' . $prix . '</td>
    <td> <img src="../uploads/'.$image.'" height="50"> </td>
    <td><button class="btn btn-success"><a href="update_prod.php?updateid='.$id.'" class="text-light" style="text-decoration: none;">Modifier</a></button>
    <button class="btn btn-danger"><a href="delete_prod.php?deleteid='.$id.'" class="text-light"  style="text-decoration: none;">Supprimer</a></button></td>
    </tr>';
    }
}
?>

            </tbody>
        </table>
    </div>
		</div>
		</div>
	</body>
</html>