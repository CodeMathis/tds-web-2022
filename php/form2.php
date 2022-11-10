<?php
$prenom = $_GET["prenom"]??"Anonyme";
$max = $_GET["nb"]??5;
$color = $_GET["color"]??"white";
$bgcolor = $_GET["bgcolor"]??"black";
?>

<form method="get" action="form2.php">
    <input type="text" name="prenom">
    <input type="number" value="1" max="6" min="1" name="max">
    <input type="color" name="color">
    <input type="color" name="bgcolor">
    <button type="submit">Valider</button>
</form>

<?php
foreach (range(1, $max) as $number) {
    if ($number > 4) {
        echo "<br>";
    }
    echo "<h$number, style='color: $color;background-color: $bgcolor'>$prenom</h$number>";
}

?>