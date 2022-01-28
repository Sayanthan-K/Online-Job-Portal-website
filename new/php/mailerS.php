<!-- taken from github -->

<?php
session_start();
$otp=rand(1000,9999);
 $_SESSION['otp']=$otp;
 $mail=$_SESSION['mailP'];
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../PHPMailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'project2020sliit@gmail.com';                     // SMTP username
    $mail->Password   = 'sliit2020';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->AddCC($_SESSION['mailer']);

    //Recipients
    $mail->setFrom('project2020sliit@gmail.com', 'Mailer');
    $mail->addAddress('project2020sliit@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Job Jet OTP verification';
    $mail->Body    = '<b>Thank You For choosing JobJet</b><br><b>'.$otp.'</b> is your <b>EMAIL</b> Verification <b>OTP</b> Pin.';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //include'profileP.html';
   /* if ($mail->send()) {
        echo 'Message has been sent';
    }*/
    echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/stylejob.css\">
    <form method=\"post\" action=\"../html/otpvS.php\" >
    <div style=\"background-color:  rgba(128, 64, 0,1);
    width: 99%;
    height: 135%;
    box-shadow: 0px 0px 30px #333; z-index: 10;position: absolute; padding:200px 0px;\">
    <center>
    <label style=\"margin-top : 200px; font-size:18px;color:#fff;\">mail has sent to your mail ! </label><br>
    <form action=\"../html/otpv.php\" method=\"post\">
    <input type=\"submit\" name=\"mailer\" value=\"CONTINUE\" id=\"mail\" style=\"
    margin-bottom: 300px;
    width:150px;
    padding:7px;
    border-radius:5px;\">
    </form>
    </center>
    </div>
    </form>";


    $mail->send();
   
    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}