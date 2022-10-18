<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer(true);

    if(isset($_POST ['send'])){
        try{
            //settings of email sending
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'gilbertlavares5@gmail.com';
            $mail->Password = 'Seraval032718';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            //actual email
            $mailTo = $_POST['mail'];
            $subject = $_POST['subject'];
            $body= $_POST['body'];
            $name= $_POST['name'];
            $mail->setFrom('gilbertlavares5@gmail.com', $name );
            $mail->addAddress($mailTo);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body ;

                $mail->send();
                echo 'Message has been sent';
            
        }catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>
    <section class="vh-100 mt-5 mb-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-light text-dark" style="border-radius: 15px;">
            <div class="card-body p-5 mb-5">
              <h2 class="text-uppercase text-center mb-5">SEND EMAIL</h2>

              <form action="" method="POST">

                <div class="form-outline mb-2">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">ADMIN</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" name="mail" id="form3Example1cg" placeholder="Enter Email of the Patient" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Email</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="text" name="subject" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Subject</label>
                </div>

                <div class="form-outline">
                    <textarea class="form-control" placeholder="Enter Message here..." name="body" id="textAreaExample" rows="4"></textarea>
                    <label class="form-label" for="textAreaExample"></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body" name="send" >SEND</button>
                </div>
               
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