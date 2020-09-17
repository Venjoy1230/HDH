<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Forum HDH</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link  href="ressources/css/forum.css" rel="stylesheet">
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
                    <h1>Forum</h1>
                </div>
                <div class="topnav">
                    <a onclick="document.getElementById('id01').style.display='block'">Créer une discussion</a>
                    <a id="mesdiscu" onclick="Mesdiscussion()">Mes discussions</a>
                    <a id="tous" onclick="Mesdiscussion2()">Toutes les discussions</a>
                    <input type="text" placeholder="Rechercher...">
                </div>
            </div>
            <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form class="modal-content">
                    <div class="container3">
                        <h1>Créer une nouvelle discussion</h1>
                        <hr>
                        <label for="sujet"><b>Sujet</b></label>
                        <input type="text" id="sujet" placeholder="Saisir le titre du sujet" name="sujet" required>


                        <label for="message"><b>Message</b></label>
                        <textarea id="message" required rows="10" cols="70" placeholder="Pour que les discussions restent agréables, nous vous remercions de rester poli en toutes circonstances. En postant sur nos espaces, vous vous engagez à en respecter la charte d'utilisation. Tout message discriminatoire ou incitant à la haine sera supprimé et son auteur sanctionné."></textarea>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                            <button id="soum" onclick="getValue(sujetDisscution, dateDisscution)" type="button">Soumettre</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="wrapper3">
            <table id="myTable">
                <tr class="header">
                    <th style="width:60%;">Sujet</th>
                    <th style="width:13%;">Nom</th>
                    <th style="width:13%;">Date</th>
                    <th style="width:13%;">Statut</th>
                </tr>

            </table>
        </div>
    </div>

    <div id="copyright">
        <p>&copy;All rights reserved. | Jean Jacques Henner | Design by Henner students</a>.</p>
    </div>
    <script src="ressources/js/Test.js"></script>
</body>

</html>
