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
		<link href="http://fonts.cdnfonts.com/css/montserrat?styles=17402,17398,17400,17403,17391,17393" rel="stylesheet">
	</head>
	<body>
		<header>
			<ul id="menu">
				<?php
				echo '<li><a href="#background1">'.$barmenu["nom_site"].'</a></li>';
				echo '<li><a href="#background6">'.$barmenu["menu_titre1"].'</a></li>';
				echo '<li><a href="#background5">'.$barmenu["menu_titre2"].'</a></li>';
                echo '<li><a href="#background4">'.$barmenu["menu_titre3"].'e</a></li>';
				echo '<li><a href="#background3">'.$barmenu["menu_titre4"].'</a></li>';
				echo '<li><a href="#background2">'.$barmenu["menu_titre5"].'</a></li>';
				echo '<li><a href="#background1">'.$barmenu["menu_titre6"].'</a></li>';
				?>
			</ul>
			<hr>
		</header>
		
		<main>
			<div id="background1">
                	<p class="numeros_alignes_droite">1</p>
			<div id="numero_1">
				<p class="numerotation_droite">1</p>
				<?php
                echo '<h1>'.$background1["titre_principal"].'</h1>';
                echo '<p id="citation">'.$background1["citation"].'</p>';
                ?>
				<div id="logo_aligne">
                    <?php
					echo '<img src="'.$background1["logos"]["image1"]["src"].'" alt="'.$background1["logos"]["image1"]["alt"].'">';
                    echo '<img src="'.$background1["logos"]["image2"]["src"].'" alt="'.$background1["logos"]["image2"]["alt"].'">';
                    echo '<img src="'.$background1["logos"]["image3"]["src"].'" alt="'.$background1["logos"]["image3"]["alt"].'">';
                    echo '<img src="'.$background1["logos"]["image4"]["src"].'" alt="'.$background1["logos"]["image4"]["alt"].'">';
					echo '<p id="boite_nouveaute"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Nouveautés</span><br>'.$background1["nouveaute"].'</p>';
                    ?>
				</div>
			</div>
			</div>
			
			<div id="background2">
               		<p class="numeros_alignes_gauche">2</p>
			<div id="numero_2">
                <?php
				echo '<h2 class="titre_gauche">'.$background2["titre"].'</h2>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["ambitions"][0].'</span><br>'.$background2["ambitions"][1].'</p>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["methodes"][0].'</span><br>'.$background2["methodes"][1].'</p>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["philosophie"][0].'</span><br>'.$background2["philosophie"][1].'</p>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["gouts"][0].'</span><br>'.$background2["gouts"][1].'</p>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["origines"][0].'</span><br>'.$background2["origines"][1].'</p>';
                echo '<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$background2["loisirs"][0].'</span><br>'.$background2["loisirs"][1].'</p>';
                ?>
			</div>
			</div>

            <div id="background3">
                <p class="numeros_alignes_droite">3</p>
                <div id="numero_3">
                    <?php
                    echo '<h2 class="titre_droite">'.$background3["titre"].'</h2>';
                    echo '<div class="barre_competence"><div id="barre_python_background"><div class="projets_gauche"><p>'.$background3["progress_bar1"].'</p></div></div><div id="barre_python"></div></div>';
                    echo '<div class="barre_competence"><div id="barre_html_background"><div class="projets_gauche"><p>'.$background3["progress_bar2"].'</p></div></div><div id="barre_html"></div></div>';
                    echo '<div class="barre_competence"><div id="barre_php_background"><div class="projets_droite"><p>'.$background3["progress_bar3"].'</p></div></div><div id="barre_php"></div></div>';
                    echo '<div class="barre_competence" id="barre_java"><div class="projets_droite"><p>'.$background3["progress_bar4"].'</p></div></div>';
                    echo '<div class="barre_competence" id="barre_linux"><div class="projets_gauche"><p>'.$background3["progress_bar5"].'</p></div></div>';
                    echo '<div class="barre_competence" id="barre_reseau"><div class="projets_gauche"><p>'.$background3["progress_bar6"].'</p></div></div>';
                    ?>
                </div>
            </div>
			
			<div id="background4">
                	<p class="numeros_alignes_gauche">4</p>
			<div id="numero_4">
				<h2 class="titre_gauche">Expérience</h2>
				<p class="boite_travaux"><img src="img/prime.png" alt="image prime nuit du code">Ambitions</p>
				<p class="boite_travaux"><img src="img/keysholder.png" alt="image programme keyholder">Ambitions</p>
				<p class="boite_travaux"><img src="img/jeu_de_nim.png" alt="image jeu de nim">Ambitions</p>
				<input id="bouton_voir_tout" type="button" value="VOIR TOUT">
			</div>
			</div>

			<div id="background5">
                	<p class="numeros_alignes_droite">5</p>
			<div id="numero_5">
				<h2 class="titre_droite">Formation</h2>
				<p class="projets_gauche">Apprende le Python</p>
				<p class="projets_gauche">Apprendre le HTML & CSS</p>
				<p class="projets_droite">Apprendre le PHP</p>
				<p class="projets_droite">Apprendre le Java</p>
				<p class="projets_gauche">Apprendre les cmd Linux</p>
				<p class="projets_gauche">Savoir les bases en réseau</p>
			</div>
			</div>
			
			<div id="background6">
				<hr id="separation_contact">
				<h2 class="titre_gauche">Contact</h2>
				<p class="info_contact"><img src="img/instagram.png" alt="logo instagram">met_meza</p>
				<p class="info_contact"><img src="img/facebook.png" alt="logo facebook">Met Meza</p>
				<p class="info_contact"><img src="img/discord.png" alt="logo discord">met meza#6393</p>
				<p class="info_contact"><img src="img/mail.png" alt="logo mail">mathis.ravier@sts-sio-caen.info</p>
			</div>
	
		</main>
		<footer>
			<table>
				 <tbody>
					<tr>
						<th>MathisCode</th>
						<th>Compétences</th>
						<th>Liens</th>
						<th>Contact</th>
					</tr>
					<tr>
						<td>Merci d'avoir visité mon site</td>
						<td>GUI design</td>
						<td>Accueil</td>
						<td>Instagram : met_meza</td>
					</tr>
					<tr>
						<td><hr id="hr_horizontal_contact"></td>
						<td>Python</td>
						<td>A propos de moi</td>
						<td>Facebook : met_meza</td>
					</tr>
					<tr>
						<td></td>
						<td>HTML/CSS</td>
						<td>Travaux</td>
						<td>Discord : met_meza#6393</td>
					</tr>
					<tr>
						<td></td>
						<td>Anglais</td>
						<td>Projets</td>
						<td>Mél : mathis.ravier@sts-sio-caen.info</td>
					</tr>
					<tr>
						<td></td>
						<td>...</td>
						<td>Contact</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<hr>
			<p>Copyright © 2022. All rights reserved.</p>
		</footer>
	</body>
</html>
