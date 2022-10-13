<?php
$calcul = $_GET["calcul"]??"";
?>
<form method="get" action="calc.php">
    <input type="text" name="calcul">
<?php
eval('$resultat = @(' . $calcul . ');');
echo "$calcul = $resultat";
eval("");
?>