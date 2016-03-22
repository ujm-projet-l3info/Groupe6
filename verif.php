<?php
session_start();
if ((!isset($_SESSION['utilisateur'])) || ($_SESSION['utilisateur'] == ''))
{
	echo '<p>Vous devez vous <a href="accueil.html">connecter</a> pour accéder à ces pages.</p>'."\n";
	exit();
}
?>