<?php
session_start();
$res = "Non connecté";

if(isset($_SESSION["user"])){
    $res="Vous êtes ".$_SESSION["user"];
    $res.=" <a href=deco.php>Déconnexion</a> ";
}
echo $res;
?>