<!DOCTYPE HTML>

<html>

  <head>

    <meta charset="utf-8"/>

  </head>

  <body>

    
    
    <?php

      
      session_start();
 
      
      
      
      
      
    ?>

    
    <form action="" method="post">

      
      <label><input type="submit" name="deconnexion" value="Déconnexion"></label>

      
      
      
      
      <?php

        
        session_destroy ();

        
        header('Location:indexprojet.php');

        
      ?>

      
      
  </body>

</html>
