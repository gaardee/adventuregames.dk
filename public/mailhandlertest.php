<?php


//$name = $_POST['name'];
////if(!empty($name))


$email = $_POST['email'];
$telefon = $_POST['telefon'];
$deltagere = $_POST['deltagere'];
$dato = $_POST['dato'];
$lokation = $_POST['lokation'];
$arrang = $_POST['arrang'];
$message = $_POST['message'];
$formcontent="From: $name \n Email: $email \n Message: $message \n lokation: $lokation \n Telefon: $telefon \n Deltagere: $deltagere \n Dato: $dato \n Arrangement: $arrang";

//$recipient = "team@adventuregames.dk";
$sender = "default@adventuregames.dk";

$subject = "Contact Form";

$mailheader = "From: $sender \r\n". 'X-mailer: PHP/' . phpversion();

function error($message){
    echo '{"status": 0, "message": "' . $message . '" }';
    exit;
}

if(empty($email)){
    error("Please fill out the email field");
}

//if(email is not an email){
//    error("Your emai is not correct");
//}

$sent = mail($recipient, $subject, $formcontent, $mailheader);

if($sent){
    echo '{"status": 1, "message": "Tak for din mail vi vender tilbage indenfor 24 timer" }';
}else{
    error("Beskeden blev desværre ikke sendt! Kontakt os direkte på tlf eller mail!");
}
 


?>
