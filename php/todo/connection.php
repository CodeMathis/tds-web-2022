<?php
session_start();
?>

<form method="post">
    <input type="text" name="username">
</form>

<?php
if(isset($_POST["username"])){
    $_SESSION["user"]=$_POST["username"];
    var_dump($_SESSION);
}
?>