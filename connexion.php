<?php

include_once 'configuration.php';

if(isset($_POST) && isset($_POST['login']) AND isset($_POST['passw'])){
     $y = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE mail = ?');
     $y->execute(array($_POST['login']));
     $x = $y->fetch();

     if ($x[0] == 0){
     	  header('location:index2.html');
        }else{
	$e = $bdd->prepare('SELECT pass FROM membres WHERE mail = ?');
	$e->execute(array($_POST['login']));
	$rep = $e->fetch();
	$passe = sha1($_POST['passw']);

	if ($passe == $rep['pass']){
	   session_start();
	   $_SESSION['utilisateur'] = $_POST['login'];
        header('location:connection.html');
	   
	}else{
	   echo 'Mot de passe incorrect';
	}
     }	   
}
?>