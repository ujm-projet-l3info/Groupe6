<?php

include 'head.php';

 
  if(isset($_SESSION['pseudo'])){

      echo"Vous ne pouvez pas vous inscrire puisque vous &ecirc;tes connect&eacute;.";
  

}else{
      
      
function afficheFormulaire($p = NULL){

?>

<form action="" method="post">
  
  
<p>Pseudo<label><input type="text" name="pseudo" value="
<?php echo $p; ?>
"/></label>
    
Mot de passe<label><input type="text" name="code"/></label>
  </p>
  
  
<label><input type="submit" name="soumission" value="Inscription" onClick="afficheFormulaire();"/>
</label>

</form>


<?php
      
}
          
if(empty($_POST['pseudo'])){
   
           afficheFormulaire();

          }else{

              if(isset($_POST['soumission'])){

                  $p = $_POST['pseudo'];
                  
$c = $_POST['code'];

                  
$pseudoExistant = false;
                  
$lignes = file ('membresprojet.txt');
                  
foreach($lignes as $ligne) {
                      
$elements = explode(";",$ligne);

                      if ($elements[0] == $p) {

                          $pseudoExistant = true;

                      }

                  }

                 
                  if($pseudoExistant){

                      echo "Ce pseudo est déja utilisé.";

                  }else{

                      $s = 0; // statut


                      $fichier_txt = fopen("membresprojet.txt","a+");
 
                      $code = md5($c);
                      
$_SESSION['statut'] = $s;
                      
       
               fputs($fichier_txt, $p.";".$code.";".$s."\n");
                      
fclose($fichier_txt);           
                      
                      
                      
echo "Confirmation de l'inscription";
echo "<br/>";
                      
echo "<a href = 'connexionprojet.php'>Connexion</a>";
                  
}
              
}
          
}
  
}
  

?>

</body>
</html>
