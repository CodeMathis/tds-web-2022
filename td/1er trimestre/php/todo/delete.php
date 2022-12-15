<?php
session_start();
$liste = $_SESSION["todolist"] ?? [];
if (isset($_GET["num"])){
    $num = $_GET["num"];
    unset($liste[$num]);
    $_SESSION["todolist"] = array_values($liste);
}
include "index.php";
?>