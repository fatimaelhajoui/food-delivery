<?php

use LDAP\Result;

include('../connection.php');

if(isset($_POST["submit"]))
{
$first=$_POST["first"];
$last=$_POST["last"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$adresse=$_POST["adresse"];
$password=$_POST["password"];

$test="SELECT * FROM client WHERE email= '$email' and password= '$password' ";
// $test->bind_param("ss", $email, $password);
// $test->execute();
$result = $con->query($test);
if($result){
  if (mysqli_num_rows($result) > 0) {
     echo "<script> alert('try again'); </script>";
  }
 else{

$sql="INSERT INTO client(nom, prenom, email, adresse, telphone, password) 
VALUES ('$first','$last','$email','$phone','$adresse', '$password')";
if ($con->query($sql) === TRUE) {

  echo "<script> alert('good'); </script>";
  
}else {
  echo 'Error: ' . mysqli_error($con);
}

}
}else {
  echo 'Error: ' . mysqli_error($con);
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
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Josefin+Sans&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Navbar -->


<!-- Navbar -->
 <!-- Background image -->
 <div class="container-fluid bg-overlay">
    	
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3"> Créez <span style="color: #feab00;">votre compte</span></h1>
        </div>
      </div>
    
</div>
<!-- Background image -->

<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
      <form  method="post" autocomplete="off">
    <!-- first input -->
  <div class="form-outline mb-4">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="first" required/>
  </div>

  <!-- last input -->
  <div class="form-outline mb-4">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="last" required/>
  </div>
      
  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required/>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label">Adresse</label>
    <input type="text" class="form-control" name="adresse" required />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" required />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
    
 
  </div>
<br><br>
  <!-- Submit button -->
  <button type="submit" class="btn btn-warning btn-block mb-4" name="submit"> Create</button>

</form>
      </div>
    </div>
</div>
</body>
</html>