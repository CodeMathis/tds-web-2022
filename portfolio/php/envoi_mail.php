<?php
session_start();
include_once '../phpmailer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$secret_data = yaml_parse_file('/home/user/info_mail_secret_apache.yaml');

$prenom = $_POST["nom_prenom"]??"Anonyme";
$mail_user = $_POST["mail"];
$objet = $_POST["objet"]??"SITE WEB";
$message = $_POST["message"];

function sendMail(string $to, string $from, string $from_name, string $subject, string $body, $secret_data) {
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
    $mail->Username = $secret_data["mail_cible"];
    $mail->Password = $secret_data["pass"];

    $mail->isHTML(true);
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = "De '".$from."' : ".$body;
    $mail->AddAddress($to);
    $mail->Send();
}

try{
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        sendMail($secret_data["mail_cible"], $mail_user, $prenom, $objet, $message, $secret_data);
        $_SESSION["formulaire_resultat"] = "Envoi réussi";
        header('Location: ../index.php#background6');
    }else{
        $_SESSION["formulaire_resultat"] = "Prouvez que vous n'êtes pas un robot avant de valider";
        header('Location: ../index.php#background6');
    }

}catch (Exception $e){
    $_SESSION["formulaire_resultat"] = "Le serveur n'a pas réussi à envoyer le message!<br>Vérifiez que votre adresse mail est valide";
    header('Location: ../index.php#background6');

}
?>