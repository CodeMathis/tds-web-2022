<?php
include 'php/master.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>MATHIS CODE</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/monsite.css">
    <link rel="stylesheet" href="css/font_import.css">
</head>
<div>
    <header>
        <ul id="menu">
            <?php
            foreach($barmenu["text_barmenu"] AS $index=>$titre){
                echo '<li><a href="index.php#background'.count($barmenu["text_barmenu"]) - $index.'">'.$titre.'</a></li>';
            }
            ?>
        </ul>
        <hr>
    </header>

    <main>
        <div id="background4">
            <?php
            echo '<h2 class="titre_gauche reveal fade-left">'.$background4["titre"].'</h2>';

            foreach($background4["images"] AS $valeur){
                echo '<div class="boite_travaux reveal fade-bottom"><img src="'.$valeur["src"].'" alt="'.$valeur["alt"].'"><p>'.$valeur["texte"].'</p></div>';
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="footer_boite_align">
            <?php
            foreach($footer["text_footer"] AS $colonne){
                echo '<div class="footer_boite">';
                foreach($colonne AS $valeur){
                    echo $valeur;
                }
                echo '</div>';
            }
            ?>
        </div>
        <hr>
        <?php
        echo '<p>'.$footer["copyright"].'</p>';
        ?>
    </footer>
    </body>
    <script src="js/animation.js"></script>
</html>