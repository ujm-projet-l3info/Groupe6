<?php

include_once 'configuration.php';

if(isset($_POST))
     echo 'ok post ';
if (isset($_POST['sexe']))
     echo 'ok sexe ';
if (isset($_POST['nom']))
   echo 'ok post nom ';
if (isset($_POST['prenom']))
   echo 'ok post prenom ';
if (isset($_POST['pseudo']))
   echo 'ok post pseudo ';
if (isset($_POST['mail']))
   echo 'ok post mail ';
if (isset($_POST['mdp']))
   echo 'ok post mdp ';



if(isset($_POST) && isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) && isset ($_POST['mail']) && isset($_POST['mdp'])){
		 $id_membre = '';    
		 $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		 $mail = $_POST['mail'];
		 $mdp = sha1($_POST['mdp']);
		 $pseudo = $_POST['pseudo'];
		 $sexe = $_POST['sexe'];
		 
		 if($i = $bdd->prepare("
		       INSERT INTO membres (id, nom, prenom, pseudo, pass, mail, sexe) 
		       VALUES (:id_membre, :nom, :prenom, :pseudo, :mdp, :mail, :sexe)")
		 )

		 $i->bindParam(':id_membre', $id_membre);
		 $i->bindParam(':nom', $nom);
		 $i->bindParam(':prenom', $prenom);
		 $i->bindParam(':pseudo', $pseudo);
		 $i->bindParam(':mdp', $mdp);
		 $i->bindParam(':mail', $mail);
		 $i->bindParam(':sexe', $sexe);
		 $i->execute();
		 echo 'OK bdd';
		 header('Location: index_m.php');
		 

}
?>