<?php

 require_once ('class.php');
 $patient =  $mhealth->getUsers();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li><a href="contact.php">Contact</a></li>
                    <li class="go-premium" ><a class="premium-cta" href="register.php">Sign up</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">welcome to Therapeace</p>
                <h1> A little more care, Awareness, and understanding</h1>
                <div class="hero-cta">
                    <a href="login.php" class="primary-cta">Consult now</a>
              
                </div>     
            </div>

            <div class="right-col">
                  <img src="img/mentalhealth.jpg" class="illustration" alt=""><a class="copyright" href='https://www.freepik.com/free-vector/people-connecting-jigsaw-pieces-head-together_3425145.htm#query=mental%20health&position=4&from_view=search">Image by rawpixel.com on Freepik'>Collaboration vector created by pch.vector - www.freepik.com</a>
            </div>

        </div>
    </section>

    <!-- <section class="feature-section">
        <div class="container">
            <ul class="feature-list">
                <li>Unlimited Tasks</li>
                <li>SMS Task Reminders</li>
                <li>Confetti Explosions upon Task Completions</li>
                <li>Social Media Announcements</li>
                <li>Real Time Collaboration</li>
                <li>Other awesome features</li>
            </ul>
        </div>    
    </section> -->

    <section class="testimonial-section">
        <div class="container">

            <ul>
                <li>
                    <blockquote> STRESS: <br> <br> a state of mental or emotional strain or tension resulting from adverse or very demanding circumstances.<blockquote><br>
                    
                </li>
                <li>
                    <blockquote>ANXIETY: <br><br> a feeling of fear, dread, and uneasiness. It might cause you to sweat, feel restless and tense, and have a rapid heartbeat. It can be a normal reaction to stress</blockquote><br><br>
                    
                </li>
                <li>
                    <blockquote>DEPRESSION: <br><br> is a common mental disorder. Globally, it is estimated that 5% of adults suffer from the disorder. It is characterized by persistent sadness and a lack of interest or pleasure in previously rewarding or enjoyable activities. </blockquote><br>
                    
                </li>
            </ul>
        </div>
    </section>
<!-- 
    <section class="contact-section">
        <div class="container">
            <div class="contact-left">
                <h2>Contact</h2>

                <form action="">

                    <label>Name</label>
                    <input type="text" name="name" id="name">

                    <label>Message</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    <br>
                    <button type="submit" class="send-message">Send</button>

                </form>
            </div>

            <div class="contact-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16009771.30417786!2d113.57715354712059!3d11.577961647168946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x324053215f87de63%3A0x784790ef7a29da57!2sPhilippines!5e0!3m2!1sen!2sph!4v1660655497214!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section> -->


    <!-- <script>

        const mobileBtn = document.getElementById ('mobile-cta');
            nav = document.querySelector ('nav');
            mobileBtnExit = document.getElementById ('mobile-exit');

        mobileBtn.addEventListener ('click' , () => {
            nav.classList.add('menu-btn');
        }) 

        mobileBtnExit.addEventListener ('click' , () => {
            nav.classList.remove('menu-btn');
        }) 

    </script> -->

    <script src="script.js"></script>


</body>
</html>