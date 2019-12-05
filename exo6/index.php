<?php
$departments = array(
  '59' => 'Nord',
  '02' => 'Aisne',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
  <meta charset="utf-8" />
    <title>PHP partie3 exo6</title>
  </head>
  <body>
    <?php
    foreach ($departments as $value => $element) { ?>
<p>Le département <?php echo $element; ?> a le numéro <?php echo $value; ?></p>
<?php } ?>
  </body>
</html>
