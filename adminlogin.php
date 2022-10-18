<?php
require_once ('class.php');

$mhealth->login_admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Therapeace</title>
</head>
<body>

<header><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    
    <button
      class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"  aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"> </i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h3>THERAPEACE</h3>
        </li>
      </ul>
      <!-- Left links -->

        <div class="d-flex align-items-center">

        <a  class="navbar-brand me-2" href="index.php">Home </a>
        <a  class="navbar-brand me-3" href="#"> About</a>



      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

</header>



<section class="vh-100 mt-1 mb-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-light text-dark" style="border-radius: 15px;">
            <div class="card-body p-5 mb-5">
              <h2 class="text-uppercase text-center mb-5">log in as admin</h2>

              <form action="" method="POST">

                <div class="form-outline mb-2">
                  <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Email</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" name="password" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="login" >Log in</button>
                </div>

                <p class="text-center text-muted mt-3 mb-3">Not an admin? <a href="login.php" class="fw-bold text-body"><u>Log in here</u></a></p>
              
                </form>

                
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>