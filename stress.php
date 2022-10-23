<?php

require_once ('class.php');
$mhealth->stress();

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
    <title>Therapeace</title>
    <link rel="stylesheet" href="css/practice3.css">
    
</head>
<body style="background-color:#eff3f7">

<div class="nav-bar">
  <div class="container">
      <a href="index.php" class="logo">Thera<span>peace</span></a>

      <img id="mobile-cta" src="img/menu.svg" class="mobile-menu" alt="menu">
      <nav>
          <img src="img/close.svg" class="close-menu" id = "mobile-exit" alt="">
          <ul class="primary-class">
              <li><a href="assesment.php">Home</a></li>
              <li><a href="#">About</a></li>
              <!-- <li><a href="#">Pricing</a></li> -->
          </ul>

          <!-- <ul class="secondary-class">
              <li><a href="#">Contact</a></li>
              <li class="go-premium" ><a class="premium-cta" href="register.php">Sign up</a></li>
          </ul> -->
      </nav>
  </div>
</div>

<?php include_once "alert.php"; ?>
<section class="vh-100 mt-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">

          <h2 class="text-uppercase text-center mb-5">stress test<br><p>Stress Scale</p></h2>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 ">

                <p>Please read each statement and circle a number 0, 1, 2 or 3 which indicates how much the statement
                applied to you <strong>over the past week </strong>. There are no right or wrong answers. Do not spend too much
                time on any statement. <br><br>
                The rating scale is as follows:<br><br>
                0 Did not apply to me at all <br>
                1 Applied to me to some degree, or some of the time<br>
                2 Applied to me to a considerable degree or a good part of time<br>
                3 Applied to me very much or most of the time<br></p>

                </div>
            </div>


            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 1 (s)-->
                    <form action="" method="POST">


                    <p><strong>1 Do you ever had trouble sleeping? </strong></p>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test1" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test1" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test1" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test1" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 2 (a)-->
                    <form action="" method="POST">

                    <p><strong>2 Do you regret the words/things you say in heat of emotion?</strong></p>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test2" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test2" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test2" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test2" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 3 (d)-->
                    <form action="" method="POST">

                    <p><strong>3 How frequent do you feel nervous, tense, or uncomfortable? </strong></p>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test3" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test3" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test3" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test3" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 4 (a)-->
                    <form action="" method="POST">

                    <p><strong>4 Do you often feel confused, anxious, irritable, fatigued, or physically weak or tired? </strong></p>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test4" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test4" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test4" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test4" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 5-->
                    <form action="" method="POST">

                    <p><strong>5 Do you often feel confused, anxious, irritable, fatigued, or physically weak or tired?</strong></p>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test5" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test5" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test5" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test5" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 6-->
                    <form action="" method="POST">

                    <p><strong>6 Do you get irritated when something you do gets interrupted?</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test6" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test6" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test6" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test6" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 7-->
                    <form action="" method="POST">

                    <p><strong>7 How frequent you feel that you are a bit sensitive? </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test7" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test7" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test7" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test7" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 8-->
                    <form action="" method="POST">

                    <p><strong>8 Do you ever feel increased interpersonal conflict (e.g . with your spouse, family members, or friends)?</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test8" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test8" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test8" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test8" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 9-->
                    <form action="" method="POST">

                    <p><strong>9 Did you ever feel that your studies, work, or home life no longer excite you or give pleasure to you?</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test9" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test9" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test9" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test9" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 10-->
                    <form action="" method="POST">

                    <p><strong>10 Do you ever feel serious guilt every time you try to relax? </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test10" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test10" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test10" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test10" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>  
            

            <div class="d-grid gap-2 col-3 mx-auto mb-5">
                <button class="btn btn-primary btn-lg me-md-2" type="submit" name= "submit">Submit</button>
          
            </div>  
            </form>




        </div>
      </div>
    </div>
  </div>
</section>


<script src="script.js"></script>
</body>
</html>