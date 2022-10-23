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

          <h2 class="text-uppercase text-center mb-5">DASS21<br><p>Depression Anxiety Stress Scale</p></h2>

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


                    <p><strong>1 (s) &nbsp&nbsp&nbsp    I found it hard to wind down </strong></p>
                 
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

                    <p><strong>2 (a) &nbsp&nbsp&nbsp  I was aware of dryness of my mouth </strong></p>
                 
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

                    <p><strong>3 (d)  &nbsp&nbsp&nbsp I couldn't seem to experience any positive feeling at all </strong></p>
                 
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

                    <p><strong>4 (a)  &nbsp&nbsp&nbsp I experienced breathing difficulty (e.g. excessively rapid breathing,
                    breathlessness in the absence of physical exertion) </strong></p>
                 
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

                    <p><strong>5(d)  &nbsp&nbsp&nbsp I found it difficult to work up the initiative to do things </strong></p>
                 
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

                    <p><strong>6 (s)  &nbsp&nbsp&nbsp I tended to over-react to situations</strong></p>

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

                    <p><strong>7 (a)  &nbsp&nbsp&nbsp I experienced trembling (e.g. in the hands) </strong></p>

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

                    <p><strong>8 (s)  &nbsp&nbsp&nbsp I felt that I was using a lot of nervous energy</strong></p>

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

                    <p><strong>9 (a)  &nbsp&nbsp&nbsp I was worried about situations in which I might panic and make a fool of myself</strong></p>

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

                    <p><strong>10 (d) &nbsp&nbsp&nbsp  I felt that I had nothing to look forward to </strong></p>

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

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 11-->
                    <form action="" method="POST">

                    <p><strong>11 (s) &nbsp&nbsp&nbsp  I found myself getting agitated</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test11" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test11" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test11" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test11" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 12-->
                    <form action="" method="POST">

                    <p><strong>12 (s) &nbsp&nbsp&nbsp  I found it difficult to relax </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test12" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test12" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test12" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test12" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 13-->
                    <form action="" method="POST">

                    <p><strong>13 (d) &nbsp&nbsp&nbsp  I felt down-hearted and blue</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test13" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test13" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test13" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test13" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 14-->
                    <form action="" method="POST">

                    <p><strong>14 (s) &nbsp&nbsp&nbsp  I was intolerant of anything that kept me from getting on with what I was doing</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test14" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test14" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test14" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test14" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 15-->
                    <form action="" method="POST">

                    <p><strong>15 (a) &nbsp&nbsp&nbsp  I felt I was close to panic</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test15" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test15" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test15" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test15" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 16 -->
                    <form action="" method="POST">

                    <p><strong>16 (d) &nbsp&nbsp&nbsp  I was unable to become enthusiastic about anything </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test16" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test16" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test16" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test16" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 17-->
                    <form action="" method="POST">

                    <p><strong>17 (d) &nbsp&nbsp&nbsp  I felt I wasn’t worth much as a person</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test17" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test17" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test17" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test17" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 18-->
                    <form action="" method="POST">

                    <p><strong>18 (s) &nbsp&nbsp&nbsp  I felt that I was rather touchy </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test18" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test18" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test18" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test18" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 19-->
                    <form action="" method="POST">

                    <p><strong>19 (a) &nbsp&nbsp&nbsp  I was aware of the action of my heart in the absence of physical exertion (e.g. sense of heart rate increase, heart missing a beat)  </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test19" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test19" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test19" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test19" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 20-->
                    <form action="" method="POST">

                    <p><strong>20 (a) &nbsp&nbsp&nbsp  I felt scared without any good reason </strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test20" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test20" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test20" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test20" id="inlineRadio1" value= 3    required />
                        <label class="form-check-label me-3" for="inlineRadio1">3</label>
                    </div>

                </div>
            </div>

            <div class="card mb-2" style="border-radius: 15px;">
                <div class="card-body p-4 mb1 "> <!--NUMBER 21-->
                    <form action="" method="POST">

                    <p><strong>21 (d) &nbsp&nbsp&nbsp  I felt that life was meaningless</strong></p>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test21" id="inlineRadio1" value= 0  required/>
                        <label class="form-check-label me-3" for="inlineRadio1">0</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test21" id="inlineRadio1" value= 1   required />
                        <label class="form-check-label me-3" for="inlineRadio1">1</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test21" id="inlineRadio1" value= 2   required/>
                        <label class="form-check-label me-3" for="inlineRadio1">2</label>
                    </div>
                 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="test21" id="inlineRadio1" value= 3    required />
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