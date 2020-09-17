<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur le Help Desk du Lycée JJH</title>
    <link rel="stylesheet" href="ressources/css/style.css" />
</head>
<body>
<div class="container">
    <div class="login">



        <div class="loginContainer">
          <img class="logo" src="ressources/images/logo.png" height="150px" width="150px;">
          <br><br>
            <form class="inputContainer loginName" action="verif-login.php" method="post">
                <input id="login" type="text" class="input"
                placeholder="Nom d'utilisateur" name="username"><br><br>
                <input id="mdp" type="password" class="input"
                placeholder="Mot de passe" name="password">
                <?php
                if(isset($_GET['err'])){
                  echo "<p class='erreur'> Indentifiant ou mot de passe<br> invalide</p>";
                }
                session_start();
                if(isset($_GET['deconnexion'])){
                  if($_GET['deconnexion']==true){
                    session_unset();
                    header("location:index.php");
                  }
                }
                else {
                  echo "<br><br><br>";
                }
                   ?>
                <button type="submit" name="button">Se connecter</button>
            </form>
            <div class="error">

            </div>
        </div>
    </div>
    <div class="background">
        <div class="titleContainer">
            <h1>Bienvenue au Help Desk du Lycée Jean-Jacques Henner </h1>
            <p> Entrez vos identifiants pour accéder à la plateforme d’aide en ligne.</p>
        </div>
    </div>
</div>
<script src="ressources/js/login.js"></script>
</body>
</html>
