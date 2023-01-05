<?php
//documentation : https://slamwiki2.kobject.net/bloc1/basesweb/php/chap5
require "connectbdd.php";

//connexion BDD
$db = Connect("classicmodels");
$sql=$_POST["sql"]??"show tables";
?>

<form method="post">
    <textarea name="sql" rows="10"><?=$sql?></textarea>
    <br>
    <button type="submit">Executer</button>
</form>
<hr>

<?php
//Requête sql
$allvalues = QueryAndFetchAll($db, "$sql");

//affichage
ArrayAsHtmlTable($allvalues);
?>