<?php
$calcul = '5 + 3 * 2';
?>

<form method="get" action="calc.php">
    <input type="text" name="calcul">

<?php
eval('$resultat = @(' . $calcul . ');');
echo "$calcul = $resultat";