<?php


    $sql="SELECT * FROM produit ";
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



<?php
//   echo '
            
//   <div class="col-lg-3 my-3">
//   <form action="manage_cart.php" method="POST">
//   <img src="../uploads/'.$image.'" class="card-img-top"  height="200">
//       <div  class="card text-center"">
//           <div class="card-body">
//               <h5 class="card-title"> ' . $nom_prod . '</h5>
//               <p class="card-text"> ' . $prix . ' Dh</p>
//               <button type="submit" name="Add_To_Cart" class="btn btn-info">Plus</button>
//           </div>
//       </div>
//   </form>
//       </div>
//       ';?>