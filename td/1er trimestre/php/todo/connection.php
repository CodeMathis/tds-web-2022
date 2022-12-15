<form method="post">
    <label for="user">Note ton prénom: </label>
    <input id="user" type="text" name="user">
</form>

<?php
session_start();
if(isset($_POST["user"])){
    $_SESSION["username"]=$_POST["user"];
}
include "index.php";
?>