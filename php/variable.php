<?php
$message = "Hello world!";
$prenom = $_GET["prenom"]??"Anonyme";
$max = $_GET["nb"]??5;
$color = $_GET["color"]??"white";
$bgcolor = $_GET["bgcolor"]??"black";

echo "<h1>$message";
echo "<br>Ton prenom est $prenom";

foreach (range(0,5) as $number){
	echo "<br>$max";
}
foreach (range(1,$max) as $number){
    if ($number > 4){
        echo "<br>";
    }
	echo "<h$number, style='color: $color;background-color: $bgcolor'>$prenom</h$number>";
}
?>