<?php
session_start();
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body id="body_id">
<header id="header_id">
    <ul id="menu">
        <?php
        echo '<li><a href="index.php#background1" id="titre_barmenu">'.$barmenu["titre"].'</a></li>';
        ?>
        <li id="aligne_droite_barmenu">
            <details><summary><img src="img/3_lignes.png" alt="logo 3 lignes" id="img_barmenu"></summary><span id="align_a_barmenu">
                <?php
                foreach($barmenu["text_barmenu"] AS $index=>$titre){
                    echo '<a href="index.php#background'.(1 + $index).'">'.$titre.'</a>';
                }
                ?>
                    </span></details>
    </ul>
    <hr>
</header>

<main>
    <div id="background4">
        <?php
        echo '<h2 class="titre_gauche reveal fade-left">'.$background4["titre"].'</h2><div class="decalage_gauche_travaux"><div id="align_travaux">';

        foreach($voir_tout["images"] AS $valeur){
            echo '<a href="'.$valeur["src"].'" target="_blank"><div class="boite_travaux reveal fade-bottom"><img src="'.$valeur["src"].'" alt="'.$valeur["alt"].'"><p>'.$valeur["texte"].'</p></div></a>';
        }
        ?>
        </div></div>
        <?php
        echo "<h2 class='titre_gauche reveal fade-left'>Et d'autres à venir</h2><div class='decalage_gauche_travaux'><div id='align_travaux'>";

        foreach($voir_tout["images_a_venir"] AS $valeur){
            echo '<a href="'.$valeur["src"].'" target="_blank"><div class="boite_travaux reveal fade-bottom"><img src="'.$valeur["src"].'" alt="'.$valeur["alt"].'"><p>'.$valeur["texte"].'</p></div></a>';
        }
        ?>
        </div></div>
    </div>
</main>
<footer>
    <hr>
    <?php
    echo '<p>'.$footer["copyright"].'</p>';
    ?>
</footer>
<script src="js/js.js"></script>
</body>
</html>
