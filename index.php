<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>proměnné</h1>
    <?php
    $age= 19 ;

     ?>
     <?php if ($age>=18) {  ?>
     <img src="img/BCH.jpg" alt="Becherovka"> ;

<?php } elseif ($age>=15) {
echo "sice máš občanku, ale ještě nemůžeš pít"; ?>
  ?>


     <?php } else {; ?>
     <img src="img/RB.jpg" alt="Robby bubble"> ;
   <?php  }

 ?>

  </body>
</html>
