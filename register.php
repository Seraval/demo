<?php 
require_once ('class.php');
$mhealth->register();

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
<?php include_once "alert.php"; ?>

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
              </ul>
          </nav>
      </div>
  </div>

    <section class="vh-100 mb-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-light text-dark" style="border-radius: 15px;">
            <div class="card-body p-5 mb-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="" method="POST">

                <div class="form-outline mb-2">
                  <input type="text" name="firstname" id="form3Example1cg" class="form-control form-control-lg"  required/>
                  <label class="form-label" for="form3Example1cg">First name</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" name="lastname" id="form3Example1cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example1cg">Last Name</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" name="number" id="form3Example1cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example1cg">Your Number</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="hidden" name="userid" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg"></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="register" >Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-3">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
               

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