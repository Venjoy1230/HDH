<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'hdh_db';
    $db_host     = '127.0.0.1';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where
              pseudo = '".$username."' and mdp = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {



           $_SESSION['username'] = $username;
           header('Location: accueil.php');

        }
        else
        {
           header('Location: index.php?err'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?err'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion


try
{
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=hdh_db;charset=utf8', $db_username, $db_password);
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM utilisateur WHERE pseudo=\'' . $username . '\'');

while ($donnees = $reponse->fetch())
{
  $_SESSION['nom']=$donnees['nom'];
}

$reponse = $bdd->query('SELECT prenom FROM utilisateur WHERE pseudo=\'' . $username . '\'');

while ($donnees = $reponse->fetch())
{
  $_SESSION['prenom']=$donnees['prenom'];
}

$reponse = $bdd->query('SELECT role FROM utilisateur WHERE pseudo=\'' . $username . '\'');

while ($donnees = $reponse->fetch())
{
  $_SESSION['role']=$donnees['role'];
}

$reponse->closeCursor();
?>
