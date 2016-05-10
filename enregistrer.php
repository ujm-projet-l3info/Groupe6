<?php

include_once 'configuration.php';

if(isset($_POST) && isset($_POST['sexe']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pseudo']) && isset ($_POST['mail']) && isset($_POST['mdp'])){
		 $id_membre = '';    
		 $nom = $_POST['nom'];
		 $prenom = $_POST['prenom'];
		 $mail = $_POST['mail'];
		 $mdp = sha1($_POST['mdp']);
		 $pseudo = $_POST['pseudo'];
		 $sexe = $_POST['sexe'];

		if(isset($_POST['cinema'])){
			$cinema = true;
		}
		else{
			$cinema = false;
		}

		 if(isset($_POST['litterature'])){
			$litt = true;
		}
		else{
			$litt = false;
		}

		 if(isset($_POST['cuisine'])){
			$cuisine = true;
		}
		else{
			$cuisine= false;
		}

		 if(isset($_POST['art'])){
			$art = true;
		}
		else{
			$art = false;
		}
		
		 if(isset($_POST['jv'])){
			$jv = true;
		}
		else{
			$jv = false;
		}

		 if(isset($_POST['deco'])){
			$deco = true;
		}
		else{
			$deco = false;
		}

		 if(isset($_POST['archi'])){
			$archi = true;
		}
		else{
			$archi = false;
		}
		
		 if(isset($_POST['animaux'])){
			$animaux = true;
		}
		else{
			$animaux = false;
		}

		 if(isset($_POST['info'])){
			$info = true;
		}
		else{
			$info = false;
		}

		 if(isset($_POST['sciences'])){
			$sciences = true;
		}
		else{
			$sciences = false;
		}
		 
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

		  if($j = $bdd->prepare("
		       INSERT INTO interets (id_usr, cinema, litterature, cuisine, art, jeux_videos, décoration, architecture, animaux, informatique, sciences)
		       VALUES (:id_membre, :cinema, :litt, :cuisine, :art, :jv, :deco, :archi, :animaux, :info, :sciences)")
		 )
		 $j->bindParam(':id_membre', $id_membre);
		 $j->bindParam(':cinema', $cinema);
		 $j->bindParam(':litt', $litt);
		 $j->bindParam(':cuisine', $cuisine);
		 $j->bindParam(':art', $art);
		 $j->bindParam(':jeux_videos', $jv);
		 $j->bindParam(':deco', $deco);
		 $j->bindParam(':archi', $archi);
		 $j->bindParam(':animaux', $animaux);		 
		 $j->bindParam(':info', $info);
		 $j->bindParam(':sciences', $sciences);
		 $j->execute();
		 echo "Vous avez été inscrit avec succès. Retour à la page d'accueil" ;
		 header('Refresh:3; url=index.html');
		 

}
?>