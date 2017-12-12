<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 10 partie 5 php</title>
  </head>
  <body>
    <?php
    $hautsDeFrance = array (
      '59' => 'Nord',
      '62' => 'Pas-de-Calais',
      '80' => 'Somme',
      '60' => 'Oise',
      '02' => 'Aisne'
    );
    foreach($hautsDeFrance as $key => $value) {
      echo 'Le numéro du département '. $value. ' est '. $key.'. <br/>';
    }
    ?>
  </body>
</html>
