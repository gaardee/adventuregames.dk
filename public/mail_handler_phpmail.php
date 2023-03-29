<?php
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
//header('Content-Type: application/json');

$email = $_POST['email'];
$name = $_POST['name'];
$telefon = $_POST['telefon'];
$deltagere = $_POST['deltagere'];
$dato = $_POST['dato'];
$lokation = $_POST['lokation'];
$arrang = $_POST['arrang'];
$message = $_POST['message'];
$formcontent="From: $name <br> Email: $email <br> Message: $message <br> lokation: $lokation <br> Telefon: $telefon <br> Deltagere: $deltagere <br> Dato: $dato <br> Arrangement: $arrang";

$captcha_code = $_POST['captcha'];

if(empty($captcha_code)|| intval($captcha_code) != intval($_SESSION['captcha_code'])){
        echo '{"status": 0, "message": "Koden er ikke valid. " }';
        exit; 
}

//if(empty($_SESSION["captcha_code"])){
//    if($captcha_code != $_SESSION["captcha_code"]){
//          echo '{"status": 0, "message": "Captcha not valid. " }';
//        exit;
//    }
//}



$recipient = "team@adventuregames.dk";
$sender = "default@adventuregames.dk";

$subject = "Contact Form";

$mailheader = "From: $sender \r\n". 'X-mailer: PHP/' . phpversion();


    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'websmtp.unoeuro.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'team@adventuregames.dk';                     // SMTP username
    $mail->Password   = 'ulanbat13';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('default@adventuregames.dk', 'Mailer');
    $mail->addAddress('team@adventuregames.dk', 'Server user');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo("$email", 'Sender');
        $mail->addCC("$email",  'Sender');
//    $mail->addBCC('bcc@example.com');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = "Website Contact Form";
    $mail->Body    = $formcontent;
    $mail->AltBody = "From: $sender \r\n". 'X-mailer: PHP/' . phpversion();

    
if(!$mail->send()) {
     echo '{"status": 0, "message": "Message could not be sent. Mailer Error: " }';
} else {
     echo '{"status": 1, "s":"'.$_SESSION['captcha_code'].'", "message": "Tak for din mail vi vender tilbage indenfor 24 timer. Har du brug for hurtigere svar, så ring! Vi er altid på telefonen." }';

}
