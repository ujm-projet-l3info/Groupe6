<?php

include 'head.php';

       
      if(isset($_SESSION['pseudo'])){

          echo"Vous êtes déjà connecté.";

      }else{

          
          function afficheFormulaire($p=NULL){

              
    ?>

    
    <form action="" method="post">

    <p>Pseudo<label><input type="text" name="pseudo" value="<?php echo $p; ?>">
</label>

      Mot de passe<label>
<input type="text" name="code"></label>

    </p>

    
    
    <label><input type="submit" name="soumission" value="Connexion"></label>

    </form>

    
    
    <?php

          }

              
              if(empty($_POST['pseudo'])){

                  afficheFormulaire($p);

              }else{

                  
                  $p = $_POST['pseudo'];

                  $c = $_POST['code'];

                  
                  
                  $code = md5($c);

                  
                  
                  $pseudoExistant = false;

                  $lignes = file ('membresprojet.txt');

                  foreach($lignes as $ligne) {

                      $elements = explode(";",$ligne);

                      if ($elements[0] == $p && $elements[1] == $code) {

                          $pseudoExistant = true;

                      }

                  }

                  
                  if($pseudoExistant == false){

                      afficheFormulaire($p="Erreur de pseudo ou de mot de passe");

                  }else{

                      $_SESSION['pseudo']=$p;

                      $_SESSION['mot_de_passe_crypté']=$code;

                      
                      header('Location:indexprojet.php');

                  }

                  
              }

      }

      
    ?>

    
    
  </body>

</html>
