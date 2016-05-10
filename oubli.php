<!DOCTYPE HTML>

 <html>
  

<head>
 
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <link rel="stylesheet" type="text/css" href="feuillecss.css" />


  <script type="text/javascript" src="f_javascript.js">

</script>


<title>Mot de passe oublié</title>

</head>

<body>


Mot de passe perdu?
Entrez votre identifiant, le mot clé que vous avez choisi au cas où vous oublieriez votre mot de passe et nous vous l'enverrons par email.
Identifiant: <textarea id="identifiant">Entrez votre identifiant</textarea>
<br/>
<textarea id="mot"> Mot clé</textarea>



    <?php
    $destinataire = SELECT email FROM membre WHERE mot_cle=mot;
    // Adresse email du destinataire
    $sujet = 'Votre mot de passe';
    $message = 'Bonjour. Ceci est un message envoyé par email vous indiquant votre mot de passe. Au revoir.';
    mail($destinataire, $sujet, $message);
    echo 'Email envoyé!';
    ?>



</body>

</html>


