<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/discussion.css" rel="stylesheet" type="text/css" media="all" />


</head>

<body>
	<?php include 'ressources/include/nav.txt'; ?>
	<div id="wrapper2">

		<div id="welcome" class="container">
			<div class="title">
				<h2>Discussion</h2>
			</div>
			<p>Nom du ticket</p>
			<p>Etat, date, etc...</p>
		</div>
	</div>
	<div id="wrapper3">
		<div class="Chat">

			<?php

			$test = True;
			$wchat = $_GET['crspdt'];
			$sujet = $_GET['sujet'];
			$loc = $_GET['loc'];
			$link = mysqli_connect("mysql-hdh.alwaysdata.net", "hdh", "admin_pass_1", "hdh_db");
			$result = mysqli_query($link, "SELECT * FROM chat");
			$row_cnt = mysqli_num_rows($result);
			mysqli_close($link);

			try {
				$bdd = new PDO('mysql:host=mysql-hdh.alwaysdata.net;dbname=hdh_db;charset=utf8', 'hdh', 'admin_pass_1');
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}
			for ($i = 1; $i < $row_cnt + 1; $i++) {
				$reponse = $bdd->query('SELECT pseudo_sender,pseudo_recieve,message,date,id,location,sujet  FROM chat WHERE id=\'' . $i . '\'');
				while ($donnees = $reponse->fetch()) {
					${'mess' . $i} = array(
						'ps' => $donnees['pseudo_sender'],
						'pr' => $donnees['pseudo_recieve'],
						'msg' => $donnees['message'],
						'date' => $donnees['date'],
						'id' => $donnees['id'],
						'location' => $donnees['location'],
						'sujet' => $donnees['sujet']
					);
				}
			}

			for ($i = 1; $i < $row_cnt + 1; $i++) {
				if (${'mess' . $i}['location'] == $loc) {

					if ($sujet == ${'mess' . $i}['sujet']) {
						if (${'mess' . $i}['pr'] == $_SESSION['username'] and ${'mess' . $i}['ps'] == $wchat) {
							$date = new DateTime(${'mess' . $i}['date']);
							$date = $date->format('Y/m/d');
							$heure = new DateTime(${'mess' . $i}['date']);
							$heure = $heure->format('H:i:s');
							echo "  <div class='container1 darker'>
			                	<p class='msg'>" . ${'mess' . $i}['msg'] . "</p>
			                	<span class='pseudo'>" . ${'mess' . $i}['ps'] . "</span><br/>
			                	<span class='date'>" . $date . "</span>
			                	<span class='time-right'>" . $heure . "</span>
			            			</div>";
							$test = False;
						}

						if (${'mess' . $i}['ps'] == $_SESSION['username'] and ${'mess' . $i}['pr'] == $wchat) {
							$date = new DateTime(${'mess' . $i}['date']);
							$date = $date->format('Y/m/d');
							$heure = new DateTime(${'mess' . $i}['date']);
							$heure = $heure->format('H:i:s');
							if ($sujet == ${'mess' . $i}['sujet']) {
								echo "  <div class='container1 lighter'>
										<p class='msg'>" . ${'mess' . $i}['msg'] . "</p>
										<span class='pseudo'>Vous</span><br/>
										<span class='date'>" . $date . "</span>
										<span class='time-right'>" . $heure . "</span>
										</div>";
								$test = False;
							}
						}
					}
				}
			}
			if ($test == True) {
				header('Location: accueil.php');
			}

			?>




		</div>
		<form class="entree" action="env_msg.php" method="post">
			<input type="hidden" name="pr" value="<?php echo "$wchat" ?>">
			<input type="hidden" name="id" value="<?php echo $row_cnt ?>">
			<input type="hidden" name="sujet" value="<?php echo $sujet ?>">
			<input type="hidden" name="loc" value="<?php echo $loc ?>">
			<textarea name="message_envoi" placeholder="Entrez votre message" rows="8" cols="80"></textarea>
			<input type="submit" value="Envoyer">

		</form>
	</div>
	</div>
			
	<?php include 'ressources/include/copyright.txt'; ?>
	<script src="bot.js"></script>
	<script src="ressources/js/dropdown.js"></script>
</body>

</html>