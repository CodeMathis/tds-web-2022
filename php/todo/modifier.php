<form method="post">
    <label for="item">Par quoi modifier: </label>
    <input id="item" type="text" name="item">
</form>

<?php
session_start();
if(isset($_POST["item"])){
    $liste = $_SESSION["todolist"] ?? [];
    $replacements = [$_GET["num"] => $_POST["item"]];
    $liste = array_replace($liste, $replacements);
    $_SESSION["todolist"] = $liste;
}
include "index.php";
?>