<?php
$BDD_hote = 'localhost';
$BDD_bd = 'projet_prog_2016';
$BDD_utilisateur = 'root';
$BDD_mot_passe = 'NZNSUSFB';

try{
	$bdd = new PDO('mysql:host='.$BDD_hote.';dbname='.$BDD_bd, $BDD_utilisateur, $BDD_mot_passe);
	$bdd->exec("SET CHARACTER SET utf8");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch(PDOException $e){
		   echo 'Erreur : '.$e->getMessage();
		   echo 'N° : '.$e->getCode();
		   die();
}

return $bdd

?>