<?php
include("../connection.php");


session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["Add_To_Cart"])){

        #if shopping cart exits
        if(isset($_SESSION["add_to_cart"])){
            #create a counter of how much products(itms) inthe shopping cart (the array $_SESSION["add_to_cart"])
            $count=count($_SESSION["add_to_cart"]);
            #Create sequential array for matching array key with id's
            $product_ids =array_column($_SESSION["add_to_cart"],"id");
            #check if the submitted product is exist in the array 
            if(!in_array($_POST["id"],$product_ids)){
                #if not add it to the array and the key will be $count
                $_SESSION["add_to_cart"][$count] = array(
                    "id" => $_POST["id"],
                    "nom" => $_POST["nom"],
                    "description" => $_POST["description"],
                    "qte" => $_POST["Quantity"],
                    "prix" => $_POST["prix"],
                );
                echo "<script>
                alert('".$_POST["nom"]." added to cart');
            </script>" ;

            }
            else{ #the product is already exist in the array, increase the quantity
                #match array key to id of the product being added to cart
                for($i=0; $i< count($product_ids); $i++){   
                      #the array key       #the array value
                    if($product_ids[$i] == $_POST["id"]){
                        #add item quantity to the existing productin the array
                        $_SESSION["add_to_cart"][$i]["qte"] += $_POST["Quantity"];
                    }
                }
                echo "<script>
                alert('".$_POST["nom"]." Quantity updated');
            </script>" ;

            }
        }
        else{
            #if shopping cart doesn't exist, Create first product with arrray key 0
            #Create arry using submitted form data, start with key 0 and fill it with values
            $_SESSION["add_to_cart"][0] = array(
                "id" => $_POST["id"],
                "nom" => $_POST["nom"],
                "description" => $_POST["description"],
                "qte" => $_POST["Quantity"],
                "prix" => $_POST["prix"],
            );
            echo "<script>
                alert('".$_POST["nom"]." added to cart');
            </script>" ;

        }
       
        // function pre_r($array){
        //     echo '<pre>';
        //     print_r($array);
        //     echo '</pre>';
        // } pre_r($_SESSION);
    }

    
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

<?php
$id = $_GET['prodid'];
$sql="SELECT * FROM produit INNER JOIN categorie ON produit.id_cat= categorie.id_cat where id_prod=$id";
$res=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
$id_prod=$row['id_prod'];
$nom_prod=$row['nom_prod'];
$prix=$row['prix'];
$image=$row['image'];
$nom_cat=$row['nom_cat'];
$description=$row['description'];

?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="images p-3">
                    <div class="text-center p-4"> <img id="main-image" src="../uploads/<?php echo $image;?>" width="350px" /> </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="info p-3">
               <form  method="post">
                <h2><?php echo $nom_prod;?></h2>
                <p><?php echo $description;?></p>
                <br>
                <p style="font-size: 20px;"><span style="font-weight: bold;">Prix: </span><?php echo $prix;?> dh</p>
                <p style="font-size: 20px;"><span style="font-weight: bold;">Categorie: </span><?php  echo $nom_cat?> </p>
                <span style="font-size: 20px;font-weight: bold;">Quantite: </span> <input class="text-center" value="Quantity" name="Quantity" type="number" max="10" min="1">
                <br><br><br>
                <button type="submit" name="Add_To_Cart" class="btn btn-success" style="font-size: 20px;" >Ajouter au panier</button>
                <input type="hidden" name="id" value="<?php echo $id_prod;?>">
                <input type="hidden" name="nom" value="<?php echo $nom_prod;?>">
                <input type="hidden" name="description" value="<?php echo $description;?>">
                <input type="hidden" name="prix" value="<?php echo $prix;?>">
            </form>
               <br>
               <br>
               <p style="font-size: 20px;"><i class='far fa-clock'></i> Durée de livraison entre : 20 min - 45 min</p>
               <p style="font-size: 20px;"><i class='far fa-credit-card'></i> Livraison gratuits</p>
            </div>
            </div>
        </div>
    </div>



</body>

</html>