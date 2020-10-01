<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Suivi des tickets (admin)</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/sdta.css" rel="stylesheet" type="text/css" media="all" />


</head>

<body>
	<?php include "ressources/include/nav.txt";	?>

	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Tickets</h2>
				<p>Vous retrouverez ici, une liste de tous les tickets formulés par les élèves</p>
			</div>
		</div>
		<div id="wrapper3">
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher...">

			<table id="myTable">
				<tr class="header">
					<th style="width:28%;">Nom</th>
					<th style="width:50%;">Objet</th>
					<th style="width:15%;">Date</th>
					<th style="width:15%;">Etat</th>
				</tr>

				<?php
				$link = mysqli_connect("mysql-hdh.alwaysdata.net", "hdh", "admin_pass_1", "hdh_db");
				$result = mysqli_query($link, "SELECT * FROM tickets");
				$row_cnt = mysqli_num_rows($result);
				mysqli_close($link);

				try {
					$bdd = new PDO('mysql:host=mysql-hdh.alwaysdata.net;dbname=hdh_db;charset=utf8', 'hdh', 'admin_pass_1');
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (Exception $e) {
					die('Erreur : ' . $e->getMessage());
				}
				for ($i = 0; $i < $row_cnt + 1; $i++) {
					$reponse = $bdd->query('SELECT sujet_texte, sujet_code, pseudo, etat, date_ouverture  FROM tickets WHERE id=\'' . $i . '\'');
					while ($donnees = $reponse->fetch()) {
						${'tick' . $i} = array(
							'st' => $donnees['sujet_texte'],
							'sc' => $donnees['sujet_code'],
							'pseudo' => $donnees['pseudo'],
							'etat' => $donnees['etat'],
							'date_ouverture' => $donnees['date_ouverture']
						);
					}
				}

				for ($i = 0; $i < $row_cnt; $i++) {
					$lien = "discussion.php?crspdt=" . ${'tick' . $i}['pseudo'] . "&sujet=" . ${'tick' . $i}['sc'] . "&loc=ticket";
					if (${'tick' . $i}['etat'] == 1) {
						$etat = "Ouvert";
					} elseif (${'tick' . $i}['etat'] == 2) {
						$etat = "Urgent";
					} else {
						$etat = "Fermé";
					}
					echo "
			<tr>
	      <td>" . ${'tick' . $i}['pseudo'] . "</td>
	      <td><a href='" . $lien . "''>   " . ${'tick' . $i}['st'] . "</a></td>
	      <td>" . ${'tick' . $i}['date_ouverture'] . "</td>
	      <td>$etat</td>

	    </tr>




			";
				}

				?>


			</table>
		</div>
	</div>
	</div>
	<?php include 'ressources/include/copyright.txt'; ?>
	<script src="ressources/bot.js"></script>
	<script src="ressources/js/dropdown.js"></script>
</body>

</html>