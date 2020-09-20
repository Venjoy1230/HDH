<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mon profil</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/MonProfil.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<?php	include "ressources/include/nav.txt";	?>
	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Mon Profil</h2>
			</div>
			<p>Vous trouverez ici, les statistiques de votre compte</p>
		</div>
	</div>
	<div id="wrapper3">
		<br>
		<div class="nom-user">
			<?php
			echo "Vous etes connecté sous le nom de $prenom 	$nom"; ?>
		</div>
		<div class="row">
			<div class="column">
			<div class="card">
				<p><i class="fa fa-user"></i></p>
				<h3>11</h3>
				<p>Tickets</p>
			</div>
			</div>

			<div class="column">
			<div class="card">
				<p><i class="fa fa-check"></i></p>
				<h3>10</h3>
				<p>Résolus</p>
			</div>
			</div>

			<div class="column">
			<div class="card">
				<p><i class="fa fa-smile-o"></i></p>
				<h3>52</h3>
				<p>Questions</p>
			</div>
			</div>

			<div class="column">
			<div class="card">
				<p><i class="fa fa-coffee"></i></p>
				<h3>23</h3>
				<p>Réponses</p>
			</div>
			</div>

		</div>

			<div class="Statistiques">
				<p>Oubli de mot de passe</p>
				<div class="container1">
					<div class="stats mdp">90%</div>
				</div>

				<p>Ordinateur cassé</p>
				<div class="container1">
					<div class="stats casse">80%</div>
				</div>

				<p>Réseau</p>
				<div class="container1">
					<div class="stats reseau">65%</div>
				</div>

				<p>Autres</p>
				<div class="container1">
					<div class="stats autres">60%</div>
				</div>
			</div>
		</div>
</div>

<div id="copyright" >
	<p>&copy;All rights reserved. | Jean Jacques Henner | Design by Henner students</a>.</p>
</div>
<script src="bot.js"></script>
</body>
</html>
