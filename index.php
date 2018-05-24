<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<h1>Holky a plat</h1>
<?php
    $Salary = 80000 ;
    $Car = 500000 ;
    $Vila = True ;
?>
<?php
    if (($Salary >= 80000) && ($Car >= 500000) || ($Vila)) {
      echo "Pravá kurva";
    }

    elseif ($Salary >= 80000) {
      echo "Pražačka";
    }
    else {
      echo "Hodná holka";
    }

 ?>


  </body>
</html>
