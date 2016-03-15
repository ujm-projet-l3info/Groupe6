<?php

include 'head.php';

if(empty($_SESSION['pseudo'])){ ?>  <!--si pseudo est vide, donc si visiteur non connecté--> 

<ul>
<li><a href = "inscriptionprojet.php">Inscription</a></li>
<li><a href = "connexionprojet.php">Connexion</a></li>
</ul>

<?php
echo "Il faut &ecirc;tre membre du site pour pouvoir acc&eacute;der &agrave; la liste des inscrits.";
}else{
echo "Bonjour ".$_SESSION['pseudo']; ?> 

<ul>
<li><a href = "logoutprojet.php">Déconnexion</a></li>
</ul>

<?php

if(file_exists('membresprojet.txt')){
$lignes = file('membresprojet.txt');


echo "<table><tr><th>Pseudo</th><th>Mot de passe</th><th>Statut</th><th>Supprimer</th></tr>";
foreach ($lignes as $num_ligne =>$ligne){
//echo "<tr><td><td>";
$g = explode(";", $ligne);

echo "<tr><td>".$g[0]."</td><td>".$g[1]."</td><td>".$g[2]."</td>";

echo"<td>";

if(isset($_SESSION['statut']) == 1){
?> 
<a href = "supprimerprojet.php">Supprimer <?php $_GET['pseudo']?> ></a>

<?php
}
echo"</td></tr>";
}
echo "</table>";
}
}
?>

</body>
</html>


