<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";



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

$recipient = "team@adventuregames.dk";
$sender = "default@adventuregames.dk";

$subject = "Contact Form";

$mailheader = "From: $sender \r\n". 'X-mailer: PHP/' . phpversion();

mail($recipient, $subject, $formcontent, $mailheader) or die("Beskeden  blev  desværre  ikke sendt! Kontakt os direkte på tlf eller mail!");
echo "Tak for din besked! Vi vender tilbage indenfor 24 timer.";
?>
