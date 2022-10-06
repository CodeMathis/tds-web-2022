<?php
$message = "Hello world!";
$prenom = $_GET["prenom"]??"Anonyme";
$max = $_GET["nb"]??5;

echo "<h1>$message</h1>","<h2>$message</h2>" ,"<h3>$message</h3>" ,$message;
echo "<br>Ton prenom est $prenom";

foreach (range(0,10) as $number){
	echo "<br>$max";
}
foreach (range(1,$max) as $number){
    if ($number > 6){
        echo "<br>";
    }
	echo "<h$number>$prenom</h$number>";
}