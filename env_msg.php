<?php

session_start();
if(empty($_SESSION['username'])){
  header('Location: index.php');
  }
else{
  $ps = $_SESSION['username'];
}
  $msg = $_POST['message_envoi'];
  $date = date('j-m-Y H:i:s');
  $pr = $_POST['pr'];
  $id = $_POST['id'];
  $id++;
  $sujet = $_POST['sujet'];
  $loc = $_POST['loc'];

  $link = mysqli_connect("mysql-hdh.alwaysdata.net", "hdh", "admin_pass_1", "hdh_db");
  $insert=" INSERT INTO `chat`(`pseudo_sender`, `pseudo_recieve`, `message`, `date`, `id`, `sujet`, `location`)
	VALUES
	('$ps','$pr','$msg','$date','$id','$sujet','$loc')";

  mysqli_query($link,$insert);


 ?>
