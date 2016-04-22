
<!DOCTYPE HTML>


 <html>
  

<head>
 
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <link rel="stylesheet" type="text/css" href="feuillecss.css" />


  <script type="text/javascript" src="f_javascript.js">

</script>


<title>Profil utilisateur</title>

</head>

<body>


<div id="profil1">

"photo de profil"<br/>

<?php

include_once 'configuration.php';
    <p>

    Pseudo : <?php echo $donnees['pseudo']; ?><br />

    Sexe : <?php echo $donnees['sexe']; ?><br />

    Centres d'interêts <?php echo $donnees['interets']; ?><br />

    Lieu de vie :<?php echo $donnees['adresse']; ?> <br/>

   </p>

<div id="profil2">
"courte présentation"<br/>

</div>

<?php

}

$reponse->closeCursor();


?>

























</body>

</html>


