<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
  $adminlogin="Victor";
  $adminmdp="chien134";
  $normallogin="Arthur";
  $normalmdp="pain246";

  $username=$_POST['username'];
  $password=$_POST['password'];


 if($username !== "" && $password !== ""){
   if (($username == $adminlogin && $password = $adminmdp)||($username == $normallogin && $password = $normalmdp)) {
     $_SESSION['username'] = $_POST['username'];
     header('Location: accueil.php');
   }
   else {
     header('Location: index.php?err');
   }
 }
 else {
    header('Location: index.php?err');
 }
}
