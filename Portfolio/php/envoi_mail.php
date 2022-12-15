<?php
include_once '../phpmailer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$data = yaml_parse_file('/home/user/info_mail_secret_apache.yaml');

$prenom = $_POST["nom_prenom"]??"Anonyme";
$mail_user = $_POST["mail"];
$objet = $_POST["objet"]??"SITE WEB";
$message = $_POST["message"];

function sendMail(string $to, string $from, string $from_name, string $subject, string $body, $data) {
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
    $mail->Username = $data["mail_cible"];
    $mail->Password = $data["pass"];

    $mail->isHTML(true);
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->Send();
}

try{
    sendMail($data["mail_cible"], $mail_user, $prenom, $objet, $message, $data);
    echo 'Message envoyé';
    sleep(1);
    header('Location: ../index.php#background6');
}catch (\Exception $e){
    echo "Le serveur n'a pas réussi à envoyer le message!";
}
?>