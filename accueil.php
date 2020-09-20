<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Accueil | HDH</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>


	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Bienvenue sur le Help Desk Henner <?php echo "$prenom"; ?></h2>
			</div>
			<p>Vous avez des problèmes avec votre materiel ou votre connexion: redémarrer votre BOX</p>
		</div>
	</div>
	<div id="wrapper3">
		<p>C'est le Chatbot:</p>
		<div class="tab">
			<button id="act" class="tablinks" onclick="openCity(event, 'connexion')">Problème de connexion</button>
			<button class="tablinks" onclick="openCity(event, 'réseau')">Problème avec le réseau</button>
			<button class="tablinks" onclick="openCity(event, 'materiel')">Problème avec votre materiel</button>
			<button class="tablinks" onclick="openCity(event, 'autre')">Autres problèmes</button>
		</div>


	  <div id="connexion" class="tabcontent">
		<ul>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>
		  <li><a href="https://www.google.com/">Nom d'utilisateur oublié</a></li>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>
		  <li><a href="https://www.google.com/">Mot de passe oublié</a></li>

		</ul>
	  </div>

	  <div id="réseau" class="tabcontent">
		<ul>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter au réseau</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter à Mbn</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter à La Vie Scolaire</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter</a></li>
		  <li><a href="https://www.youtube.com/">Je n'arrive pas à me connecter</a></li>
		</ul>

	  </div>

	  <div id="materiel" class="tabcontent">
		<ul>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
		  <li><a href="https://www.reddit.com/">Mon ordinateur est cassé</a></li>
	  </ul>
	  </div>

	  <div id="autre" class="tabcontent">
		<h2>Votre problème n'est pas présent dans la liste :</h2>
		<form>
		  <textarea id="message" rows="10" cols="70" placeholder="Entrer votre problème ici..."></textarea>
		  <br>
		  <label class="container">Urgent
			<input type="radio" name="radio" >
			<span class="checkmark"></span>
		  </label>

		  <label class="container">Peu urgent
			<input type="radio" name="radio">
			<span class="checkmark"></span>
		  </label>

		  <label class="container">Cela peut attendre
			<input type="radio" checked="checked" name="radio">
			<span class="checkmark"></span>
		  </label>
		 <br>
		 <br>
		  <button id="but" onclick="window.alert('Votre ticket a bien été crée');" ><h4>Créer mon ticket</h4></button>
		</form>

	  </div>

	</div>
</div>
<?php include 'ressources/include/copyright.txt'; ?>
<script src="ressources/js/bot.js"></script>
</body>
</html>
