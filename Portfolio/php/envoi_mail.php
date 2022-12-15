<?php
$prenom = $_POST["nom_prenom"]??"Anonyme";
$mail = $_POST["mail"];
$objet = $_POST["objet"]??"SITE WEB";
$message = $_POST["message"];
?>

<?php
mail("mathis.ravier@sts-sio-caen.info", $objet, $message, "From: ".$mail);
header('Location: ../index.php');
?>