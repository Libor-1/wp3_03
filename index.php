<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <?php
    define("MAX_naloz", 10);
    $nakladApal = 100;
    $nakladBotak = 0;
    $nakladShipHP = 200;

    while ($nakladBotak != 100)
    {
      
      $nakladApal = $nakladApal - 10;
      echo "Zásoby z ostrova Apal .<br />";
      echo "<br />";
      for ($i=0; $i != 5; $i++)
      {
        $pirateDamage = rand(0, 5);
        echo "$pirateDamage bodů poškození.<br />";
        $nakladShipHP = $nakladShipHP - $pirateDamage;
        if ($nakladShipHP <= 0)
        {
          die("Loď se potopila!<br /><hr /> Zásoby na ostrově Apal: $nakladApal.<br /> Zásoby na ostrově Botak: $cargoBotak.<br />");
        }
        echo "Aktuální stav nákladní lodi je $nakladShipHP HP.<br />";
      }
      echo "<br />";
      
      $nakladBotak = $nakladBotak + 10;
      echo "Zásoby vyloženy na ostrov Botak. Loď pluje zpět a protože je bez nákladu, tak upluje pirátům.<br /><br />";
      ?>
      <div style="font-weight: bold">
      <?php
      echo "Zásoby ostrova Apal: $nakladApal.<br />";
      ?>
      
      <?php
      echo "Zásoby ostrova Botak: $nakladBotak.<br />";
      ?>
      
      <?php
      echo "HP nákladní lodi: $nakladShipHP.<br />";
      ?>
      </div>
      <hr />
    <?php
    }
    ?>




  </body>
</html>