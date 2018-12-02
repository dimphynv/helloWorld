<?php

//ini_set ('display_errors', 1);
//error_reporting(F_ALL);
//include_once 'secured/_variables.php';


//var_dump($hello);



$product = 20;
?>
<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <!-- met . wordt een nieuwe string gemaakt, met komma alleen twee strings gecombineerd maar geen nieuwe string object gemaakt.
     string geconcateneren gebruik dan enkele quotes-->

      <?php //echo 'ik ben ', $voornaam, ' en mijn achternaam is ', $achternaam;
      //echo '<br>';
      //print('ik ben '. $voornaam. ' en mijn achternaam is '. $achternaam);
      //bij print functie altijd . om te concateneren
       ?>

<?php $btw_bedrag = 0.21 * $product;
$btw_bedrag_inclusief=$product + round($btw_bedrag, 2);
echo 'De btw van het product bedraagt: ',$btw_bedrag_inclusief;
?>
<address>
Copyright &copy; <?php print date('Y') ?>Winbooks  &reg;<br>
Alle rechten voorbehouden. All rights reserved.
</address>
   </body>

</html>
