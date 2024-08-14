<?php
include('../connection.php');
session_start();
if(isset($_POST["submit"])){
  $email=$_POST["email"];
  $psw=$_POST["password"];

  if(!empty($email) && !empty($password)){
    //check if the account exists
    $stm= $con->prepare("SELECT email, password from client where email=? and password=?");
    $stm-> bind_param("ss", $email, $psw);
    $stm->execute();
    $stm->store_result();
    // $count=$stm->num_rows;
    if($stm->num_rows >0){
      $stmt->bind_result($email, $password);
      $stmt->fetch();
      if($psw === $password){
      session_regenerate_id();
		$_SESSION['log'] = TRUE;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $psw;
    echo 'Welcome ' . $_SESSION['name'] . '!';
   } else {
      // Incorrect password
      echo 'Incorrect username and/or password!';
    }

    }else{
      echo "not exist";
    }
  }else{
    echo "<script> alert('please write your email and password !'); </script>";
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
    <?php
include '../nav.php';
?>

<!-- Navbar -->
 <!-- Background image -->
 <div class="container-fluid bg-overlay">
    	
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Vous êtes faim? <span style="color: #feab00;">Connectez-vous!</span></h1>
        </div>
      </div>
    
</div>
<!-- Background image -->

<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
      <form method="post" autocomplete="off">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"/>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-warning btn-block mb-4" name="submit">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Vous n'êtes pas client? <a style="color: #feab00;" href="register.php">Créez votre compte</a></p>
  </div>
</form>
      </div>
    </div>
</div>
</body>
</html>