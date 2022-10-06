<?php
$calcul = $_GET["calcul"]??"0+0";
?>
<form method="get" action="calc.php">
    <input type="text" name="calcul">
<?php
eval('$resultat = @(' . $calcul . ');');
echo "$calcul = $resultat";
?>