<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/tickets.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
	<?php include "ressources/include/nav.txt";


	$link = mysqli_connect("mysql-hdh.alwaysdata.net", "hdh", "admin_pass_1", "hdh_db");
	$result = mysqli_query($link, "SELECT * FROM Ticket");
	$row_cnt = mysqli_num_rows($result);
	mysqli_close($link);

	try {
		$bdd = new PDO('mysql:host=mysql-hdh.alwaysdata.net;dbname=hdh_db;charset=utf8', 'hdh', 'admin_pass_1');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	for ($i = 0; $i < $row_cnt + 1; $i++) {
		$reponse = $bdd->query('SELECT `Tick_Id`, `Tick_Date_Creation`, `Tick_Cate_Id`,
			`Tick_Design`, `Tick_Materiel`, `Tick_Lieu`, `Tick_Stat_Id`, `Tick_Date_Statut`  FROM Ticket WHERE Tick_By_User_Id=\'' . $id . '\'' );
		while ($donnees = $reponse->fetch()) {
			${'tick' . $i} = array(
				'Tick_Id'   						=> $donnees['Tick_Id'],
				'Tick_Date_Creation'    => $donnees['Tick_Date_Creation'],
				'Tick_Cate_Id'   				=> $donnees['Tick_Cate_Id'],
				'Tick_Design'    				=> $donnees['Tick_Design'],
				'Tick_Materiel'    			=> $donnees['Tick_Materiel'],
				'Tick_Lieu'    					=> $donnees['Tick_Lieu'],
				'Tick_Stat_Id'   			 	=> $donnees['Tick_Stat_Id'],
				'Tick_Date_Statut'    	=> $donnees['Tick_Date_Statut']

			);
		}
	}

	?>

	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Mes Tickets</h2>
			</div>
			<p>Vous trouverez ici, une liste de vos tickets créés.</p>
		</div>
	</div>
	<div class="wrapper3">

		<?php
		for ($i = 0; $i < $row_cnt; $i++) {

				echo '

						<div class="ticket">
							<p class ="date">Date : ' . ${'tick' . $i}['Tick_Date_Creation'] . '</p>
							<p class="texte">' . ${'tick' . $i}['st'] . '</p>
							<p class="date">Statut : ' . $etat . '</p>
						</div>
					';

		}


		?>

	</div>
	</div>
	<?php include 'ressources/include/copyright.txt'; ?>
	<script src="ressources/js/dropdown.js"></script>
</body>
