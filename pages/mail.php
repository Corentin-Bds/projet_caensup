<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer();

if($mail->SMTPAuth){
   $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'baudais.corentin@sts-sio-caen.info';    //Adresse email à utiliser
   $mail->Password   =  'test';         //Mot de passe de l'adresse email à utiliser
}

$mail->From       = trim($_POST["email_from"]);                //L'email à afficher pour l'envoi
$mail->FromName   = trim($_POST["email_from_alias"]);          //L'alias de l'email de l'emetteur

$mail->AddAddress(trim($_POST["email_to"]));

$mail->Subject    =  $_POST["object"];                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->AltBody = $_POST["body"]; 	       //Texte brut
$mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut
$mail->MsgHTML($_POST["body"]);            //Forcer le contenu du body html pour ne pas avoir l'erreur "body is empty' même si on utilise l'email en contenu alternatif

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo 'Message bien envoyé';
}