<?php
$step = 1; //définiton de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 5</title>
   </head>
   <body>
     <p>
     <?php
while ($step <= 15) //définition de la boucle
{ echo 'On y est presque. <br />';
$step++; //incrémentation de la variable
}
      ?>
    </p>
   </body>
 </html>
