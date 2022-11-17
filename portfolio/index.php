<?php
$data = yaml_parse_file('yaml/infos.yaml');
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
				<li><a href="#background1">MATHIS CODE</a></li>
				<li><a href="#background5">Contact</a></li>
				<li><a href="#background4">Projets</a></li>
				<li><a href="#background3">Travaux</a></li>
				<li><a href="#background2">À propos de moi</a></li>
				<li><a href="#background1">Accueil</a></li>
			</ul>
			<hr>
		</header>
		
		<main>
			<div id="background1">
                		<p class="numeros_alignes_droite">1</p>
			<div id="numero_1">
				<p class="numerotation_droite">1</p>
				<h1>Bienvenue Sur le Site D’Un Étudiant</h1>
				<p id="citation">«Tout Le Monde Peut Peindre Un Beau Tableau Avec L’aide D’un Bon Peintre»</p>
				<div id="logo_aligne">
					<img src="img/instagram.png" alt="logo instagram">
					<img src="img/fbk.png" alt="logo facebook">
					<img src="img/discord.png" alt="logo discord">
					<img src="img/mail.png" alt="logo mail">
					<?php
					    echo '<p id="boite_nouveaute"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Nouveautés</span><br>'.$data["nouveaute"].'</p>';
                    ?>
				</div>
			</div>
			</div>
			
			<div id="background2">
               			<p class="numeros_alignes_gauche">2</p>
			<div id="numero_2">
				<h2 class="titre_gauche">À propos de moi</h2>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Ambitions</span><br>
				Pour l’instant, je vise des études jusqu’à bac+3 ou bac+5 dans le développement d’applications. En revanche, si je change d’avis, je peux à tout moment me reconvertir dans la cybersécurité</p>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Méthodes</span><br>
				Même si je travaille souvent seul, je n’ai aucun problème avec le travail en équipe. Au contraire, travailler en équipe permet parfois de me débloquer plus facilement ou approfondir mes connaissances</p>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Philosophie</span><br>
				Les interfaces c’est bien joli, tout le monde peut les utiliser mais qui peut les créer. J’aime faciliter la tâche pour les autres et découvrir de nouvelles choses par la même occasion. Voilà pourquoi j’ai fait ces choix de vie</p>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Ambitions</span><br>
				Pour l’instant, je vise des études jusqu’à bac+3 ou bac+5 dans le développement d’applications. En revanche, si je change d’avis, je peux à tout moment me reconvertir dans la cybersécurité</p>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Méthodes</span><br>
				Même si je travaille souvent seul, je n’ai aucun problème avec le travail en équipe. Au contraire, travailler en équipe permet parfois de me débloquer plus facilement ou approfondir mes connaissances</p>
				<p class="boite_a_propos"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Philosophie</span><br>
				Les interfaces c’est bien joli, tout le monde peut les utiliser mais qui peut les créer. J’aime faciliter la tâche pour les autres et découvrir de nouvelles choses par la même occasion. Voilà pourquoi j’ai fait ces choix de vie</p>
			</div>
			</div>
			
			<div id="background3">
                		<p class="numeros_alignes_droite">3</p>
			<div id="numero_3">
				<h2 class="titre_droite">Travaux</h2>
				<p class="boite_travaux"><img src="img/prime.png" alt="image prime nuit du code">Ambitions</p>
				<p class="boite_travaux"><img src="img/keysholder.png" alt="image programme keyholder">Ambitions</p>
				<p class="boite_travaux"><img src="img/jeu_de_nim.png" alt="image jeu de nim">Ambitions</p>
				<input id="bouton_voir_tout" type="button" value="VOIR TOUT">
			</div>
			</div>

			<div id="background4">
                		<p class="numeros_alignes_gauche">4</p>
			<div id="numero_4">
				<h2 class="titre_gauche">Projets</h2>
				<p class="projets_gauche">Apprende le Python</p>
				<p class="projets_gauche">Apprendre le HTML & CSS</p>
				<p class="projets_droite">Apprendre le PHP</p>
				<p class="projets_droite">Apprendre le Java</p>
				<p class="projets_gauche">Apprendre les cmd Linux</p>
				<p class="projets_gauche">Savoir les bases en réseau</p>
			</div>
			</div>
			
			<div id="background5">
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
