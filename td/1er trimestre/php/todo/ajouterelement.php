<form method="post">
    <label for="item">Quoi rajouter: </label>
    <input id="item" type="text" name="item">
</form>

<?php
session_start();
if(isset($_POST["item"])){
    $liste = $_SESSION["todolist"] ?? [];
    $liste[] = $_POST["item"];
    $_SESSION["todolist"] = $liste;
}
include "index.php";
?>