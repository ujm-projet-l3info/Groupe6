<?php include_once 'verif.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="feuillecss.css" />
  <script type="text/javascript" src="f_javascript.js"></script>
<title>Accueil</title>
</head>

<body>
<div id="centrale">
    
    <div id="entete"><img src="image/banniere_amis.jpg" width="600" height="300"></div>
    <div id="menu">
     <table align="center">
            <tr>Bienvenue 
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
    </div>
    <div id="contenu">
    </div>
    <div id="pied">
          <p> Contactez-nous : morganePielawski@etu.univ-st-etienne.fr /
      remy.duverger@etu.univ-st-etienne.fr <br/>
	&copy; Morgane Pielawski - Rémy Duverger </p>
    </div>

</div>
</body>
</html>
