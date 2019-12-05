<?php
$months = array ('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai','Juin','juillet','aout','septembre','octobre','novembre','decembre');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <title>Exo </title>
</head>
<body>
  <?php
  /* pour chaque element du tableau $months on affiche ces elements
  La boucle foreach est plus adaptée pour les tableaux */
  foreach($months as $element){
    ?>
    <p><?php echo $element; ?></p>
    <!-- on peut mettre du php dans html mais pas l'inverse -->
    <?php } ?>
  </body>
  </html>
