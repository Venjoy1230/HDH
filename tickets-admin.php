<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Suivi des tickets (admin)</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
  <link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
  <link href="ressources/css/sdta.css" rel="stylesheet" type="text/css" media="all"/>


</head>
<body>
	<?php
        session_start();
          if($_SESSION['username'] !== ""){
            $user = $_SESSION['username'];}
          else {
            header('Location: index.php');
          }
          include "ressources/include/nav.txt"
            ?>

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
      <th style="width:2%;">État</th>
      <th style="width:28%;">Nom</th>
      <th style="width:50%;">Objet</th>
      <th style="width:10%;">Date</th>
      <th style="width:10%;">Date de résolution</th>
      <th style="width:10%;">Priorité</th>
    </tr>
    <tr>
      <td>
        <label class="container1">
          <input type="checkbox" >
          <span class="checkmark"></span>
          </label>
      </td>
      <td onclick="window.open('https://www.google.com/')">Jean </td>
      <td onclick="window.open('https://www.google.com/')">Probleme</td>
      <td onclick="window.open('https://www.google.com/')">26/03/2020</td>
      <td onclick="window.open('https://www.google.com/')">26/03/2020</td>
      <td onclick="window.open('https://www.google.com/')">Ca peut attendre</td>
    </tr>
    <tr>
      <td>
        <label class="container1">
          <input type="checkbox">
          <span class="checkmark"></span>
          </label>
      </td>
      <td onclick="window.open('https://www.google.com/')">Alain</td>
      <td onclick="window.open('https://www.google.com/')">Mon ordi s'allume pas</td>
      <td onclick="window.open('https://www.google.com/')">18/09/2020</td>
      <td onclick="window.open('https://www.google.com/')">26/03/2020</td>
      <td onclick="window.open('https://www.google.com/')">Urgent</td>
    </tr>
    <tr>
      <td>
        <label class="container1">
          <input type="checkbox">
          <span class="checkmark"></span>
          </label>
      </td>
      <td onclick="window.open('https://www.google.com/')">Bertrand</td>
      <td onclick="window.open('https://www.google.com/')">Mot de passe Mbn oublié</td>
      <td onclick="window.open('https://www.google.com/')">05/02/2020</td>
      <td onclick="window.open('https://www.google.com/')">26/03/2020</td>
      <td onclick="window.open('https://www.google.com/')">Urgent</td>
    </tr>
    <tr>
      <td>
        <label class="container1">
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
      </td>
      <td  onclick="window.open('https://www.google.com/')">Virchiale</td>
      <td  onclick="window.open('https://www.google.com/')">Mkai</td>
      <td  onclick="window.open('https://www.google.com/')">21/12/2003</td>
      <td onclick="window.open('https://www.google.com/')">26/03/2020</td>
      <td  onclick="window.open('https://www.google.com/')">Ca peut attendre</td>
    </tr>
  </table>
	</div>
</div>
</div>
<div id="copyright" >
	<p>&copy;All rights reserved. | Jean Jacques Henner | Design by Henner students</a>.</p>
</div>
<script src="ressources/bot.js"></script>
</body>
</html>
