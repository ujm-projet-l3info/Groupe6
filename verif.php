<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>


<?php
session_start();
if ((!isset($_SESSION['utilisateur'])) || ($_SESSION['utilisateur'] == ''))
{
	echo '<p>Vous devez vous <a href="index.html">connecter</a> pour accéder à ces pages.</p>'."\n";
	exit();
}
?>