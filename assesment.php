<?php

require_once ('class.php');
$mhealth->assesment();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/practice3.css">
    <title>Document</title>
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

<?php include_once "alert.php"; ?>
    <section class="testimonial-section">
        <div class="container">
            <ul>
                <li>
                    
                    <blockquote>"You don’t have to control your thoughts. You just have to stop letting them control you."</blockquote><br>
                    <button> <a href="dass21.php">take dass21</a> </button>
                </li>
                <li>
                    
                    <blockquote>"There is a crack in everything, that’s how the light gets in."</blockquote><br>
                    <button> stress test</button>
                </li>
            </ul>
        </div>

        <div class="container">
            <ul>
                <li>
                    
                    <blockquote>“It's so empowering to say “this isn't serving me' and walk away in peace.”"</blockquote><br>
                    <button> anxiety test</button>
                </li>
                <li>
                    
                    <blockquote>“Not everything that weighs you down is yours to carry.”</blockquote><br>
                    <button>Depression Test</button>
                </li>
            </ul>
        </div>
    </section>

<script src="script.js"></script>
</body>
</html>