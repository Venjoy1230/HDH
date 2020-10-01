<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'hdh';
    $db_password = 'admin_pass_1';
    $db_name     = 'hdh_db';
    $db_host     = 'mysql-hdh.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM User where
              User_Login = '".$username."' and User_MP = '".$password."' ";
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
  $bdd = new PDO('mysql:host=mysql-hdh.alwaysdata.net;dbname=hdh_db;charset=utf8', $db_username, $db_password);
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
/*Id utiliisateur*/
$reponse = $bdd->query('SELECT User_Id FROM User WHERE User_Login=\'' . $username . '\'');

while ($donnees = $reponse->fetch())
{
  $_SESSION['User_id']=$donnees['User_Id'];
}
$id=$_SESSION['User_id'];
/*Role*/
$reponse = $bdd->query('SELECT User_prof_Id FROM User WHERE User_id=\'' . $id . '\'');
while ($donnees = $reponse->fetch())
{
  $_SESSION['role']=$donnees['User_prof_Id'];
}
$role =$_SESSION['role'];



/*Eleve*/


if ($role==3) {
  $reponse = $bdd->query('SELECT `Elev_Mat`, `Elev_User_Id`, `Elev_Class_Id`,
     `Elev_Prof_Id`, `Elev_Nom`, `Elev_Prenom`, `Elev_Datenaiss`, `Elev_LieuNaiss`,
      `Elev_DepNaiss`, `Elev_Parent1`, `Elev_Parent2`, `Elev_Email`, `Elev_Email2`,
      `Elev_Adresse`, `Elev_Ville`, `Elev_CP`, `Elev_Statut`, `Elev_Regime`, `Elev_Sexe`,
      `Elev_Annee`, `Elev_Option1`, `Elev_Option2`, `Elev_Option3`, `Elev_Option4`,
      `Elev_Option5`, `Elev_MEF`, `Elev_Remarque` FROM Eleve WHERE Elev_User_id=\'' . $id . '\'');
  while ($donnees = $reponse->fetch())
  {
    $_SESSION['infos'] = array(
      'prenom'    => $donnees['Elev_Prenom'],
      'nom'       => $donnees['Elev_Nom'],
      'datenaiss' => $donnees['Elev_Datenaiss'],
      'lieunaiss' => $donnees['Elev_Nom'],
      'depnaiss'  => $donnees['Elev_DepNaiss'],
      'parent1'   => $donnees['Elev_Parent1'],
      'parent2'   => $donnees['Elev_Parent2'],
      'mail'      => $donnees['Elev_Email'],
      'adresse'   => $donnees['Elev_Adresse'],
      'ville'     => $donnees['Elev_Ville'],
      'code_post' => $donnees['Elev_CP'],
      'sexe'      => $donnees['Elev_Sexe']
    );
  }
}
/*Administration*/
elseif ($role==1) {
  $reponse = $bdd->query('SELECT Admi_Prenom FROM Administratif WHERE Admi_User_id=\'' . $id . '\'');
  while ($donnees = $reponse->fetch())
  {
    $_SESSION['prenom']=$donnees['Admi_Prenom'];
  }


  $reponse = $bdd->query('SELECT Admi_Nom FROM Administratif WHERE Admi_User_id=\'' . $id . '\'');
  while ($donnees = $reponse->fetch())
  {
    $_SESSION['nom']=$donnees['Admi_Nom'];
  }
}
$reponse->closeCursor();


?>
