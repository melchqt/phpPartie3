<?php
$departments = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exo5 partie3</title>
  </head>
  <body>
    <p>
      <?php
      foreach ($departments as $value => $element) {
        ?>
        <p><?php echo $value . ' '. $element ?></p>
      <?php } ?>
    </p>
  </body>
</html>
