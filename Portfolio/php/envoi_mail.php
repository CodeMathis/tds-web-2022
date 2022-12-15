<?php
include_once '../phpmailer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$prenom = $_POST["nom_prenom"]??"Anonyme";
$mail = $_POST["mail"];
$objet = $_POST["objet"]??"SITE WEB";
$message = $_POST["message"];

function sendMail(string $to, string $from, string $from_name, string $subject, string $body) {
    $mail = new PHPMailer(true);  // Crée un nouvel objet PHPMailer
    $mail->IsSMTP(); // active SMTP
    $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
    $mail->SMTPSecure = 'tls'; //or ssl
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    //Pour autoriser un envoi depuis 127.0.0.1
    $mail->SMTPOptions = [
            "ssl"=>[
            "verify_peer"=>false,
    "verify_peer_name"=>false,
    "allow_self_signed"=>true
    ]
    ];

    $mail->SMTPAuth = true;  // Authentification SMTP active
    $mail->Username = "youremail@gmail.com";
    $mail->Password = 'yourpassword';

    $mail->isHTML(true);
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->Send();
}

mail("mathis.ravier@sts-sio-caen.info", $objet, $message, "From: ".$mail);
header('Location: ../index.php');
?>