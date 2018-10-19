<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require_once('../../../../PHPMailer/src/Exception.php');
require_once('../../../../PHPMailer/src/PHPMailer.php');
require_once('../../../../PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//$recipient = "";
//////Load Composer's autoloader
//////require 'vendor/autoload.php';
//function sendMail($email){
//    global $recipient;
////    $GLOBALS['recipient']=$email;
//    $recipient=$email;
//    echo "<br>$recipient";
//}


function sendMail($email,$user_id){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
//    global $recipient;
//    echo "<br>$recipient";
//    echo "hey<br>";
    
    
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'skylineairways85@gmail.com';                 // SMTP username
//    $mail->Username = 't2lassi12345@gmail.com';
//    $mail->Username = 'neelampnarang@gmail.com';                 // SMTP username
    $mail->Password = '#keepgoing7';                           // SMTP password
//    $mail->Password = '12345t212345';                           // SMTP password
//    $mail->Password = 'neelam1972';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    
    

    

    //Recipients
    $mail->setFrom('skylineairways85@gmail.com');
//    $mail->setFrom('t2lassi12345@gmail.com');
//    $mail->setFrom('neelampnarang@gmail.com');
    $mail->addAddress("$email");     // Add a recipient


    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SkylineAirways Account Confirmation';
    $mail->Body    = "<div style='font-family:Roboto; font-size:16px; max-width: 600px; line-height: 21px;'>    
            <h4>Hello,</h4>
            <h3>Your SkylineAirways Account is Ready.</h3>
            <br>  
            <a style='text-decoration:none; color:#fff; background-color:#348eda;border:solid #348eda; border-width:2px 10px; line-height:2;font-weight:bold; text-align:center; display:inline-block;border-radius:4px' href=localhost/AirlineSystem/airline/scripts/mail_verify/verified.php?q=$user_id >
            Activate your account </a>
            <br>  
            <h3>Thank you for Registering.</h3>
            <br>
            <br>
            <h4>Sincerely,</h4>
            <h5>The Skyline Team.</h5>
            </div>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("Location: ../mail_verify/verify.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    
}