<!DOCTYPE HTML>

<html>

  <head>

    <meta charset="utf-8"/>

  </head>

  <body>

    
    <?php

      
      session_start();
 
    
             
                  $lignes = file ('membresprojet.txt');

                  foreach($lignes as $ligne) {

                      $elements = explode(";",$ligne);

                  }if ($elements[2] != 1) {

                          echo"Erreur";

                      }else{

                      





                  }

      
    ?>

    
    
  </body>

</html>
