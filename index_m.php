<?php include_once 'verif.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="feuillecss.css" />
  <script type="text/javascript" src="f_javascript.js"></script>
<title>Accueil</title>
</head>

<body>
<div id="centrale">
    
    <div id="entete"><img src="image/easste.png" ></div>

    <div id="main">     
    
    <table align="center">
            <tr><h1>Bienvenue</h1>
            </tr>
	    
	    <tr><a href="exemple_carte.html" target="_blank">
		Voir votre position actuelle</a>
	    </tr>            

            <tr>
                <td><ul>Voir les événéments disponibles (lien a venir)</ul></td>    
            </tr>
            <tr>
                <td><ul>Créer un événement (lien a venir)</ul></td>
            </tr>
            <tr>
                <td><ul>Modifier un événement (lien a venir)</ul></td>
            </tr>
            <tr>
                <td><ul>Supprimer un événement (lien a venir)</ul></td>
            </tr>
            
        </table>
        <form id="formDec" action ="deconnexion.php" method="POST">
	<input type="submit" value="Déconnexion"/>
	</form>

    <!-- fin div main -->
    </div>

    <div id="pied">
      <p> Contactez-nous : morgane.pielawski@etu.univ-st-etienne.fr /
	remy.duverger@etu.univ-st-etienne.fr <br/>
	&copy; Morgane Pielawski - Rémy Duverger <br/>
	<a href="infos.php">Qui sommes-nous ?</a>
      </p>
    </div>

<!-- fin div centrale-->
</div>
</body>
</html>
