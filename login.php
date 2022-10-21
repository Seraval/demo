<?php
require_once ('class.php');

$mhealth->login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/practice3.css">
    <title>Therapeace</title>
</head>
<body>

<div class="nav-bar">
  <div class="container">
      <a href="index.php" class="logo">Thera<span>peace</span></a>

      <img id="mobile-cta" src="img/menu.svg" class="mobile-menu" alt="menu">
      <nav>
          <img src="img/close.svg" class="close-menu" id = "mobile-exit" alt="">
          <ul class="primary-class">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <!-- <li><a href="#">Pricing</a></li> -->
          </ul>

          <ul class="secondary-class">
              <li><a href="#">Contact</a></li>
              <!-- <li class="go-premium" ><a class="premium-cta" href="register.php">Sign up</a></li> -->
          </ul>
      </nav>
  </div>
</div>


<?php include_once "alert.php";?>

<section class="vh-100 mb-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-light text-dark" style="border-radius: 15px;">
            <div class="card-body p-5 mb-5">
              <h2 class="text-uppercase text-center mb-5">log in</h2>

              <form action="" method="POST">

                <div class="form-outline mb-2">
                  <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Email</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" name="password" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Password</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="hidden" name="userid" value = <?php $id ?> id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg"></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login" >Log in</button>
                </div>

                <p class="text-center text-muted mt-3 mb-3 ">Don't have an account? <a href="register.php" class="fw-bold text-dark"><u>Sign up here</u></a></p>

                <p class="text-center text-muted mt-3 mb-3 "><a href="adminlogin.php" class="fw-bold text-dark"><u>Log in as admin</u></a></p>
              
                </form> 

                
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="script.js"></script>
</body>
</html>