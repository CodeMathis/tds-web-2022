<?php
try{
    $db = new PDO("mysql:host=127.0.0.1;dbname=classicmodels", "root", "");
}catch (PDOException $e){
    echo $e->getMessage();
    die();
}
$result = $db -> query("show tables")->fetchAll(); #statement, fetchall recupère tous les enregistrements
echo '<pre>'.print_r($result, true).'</pre>';
?>