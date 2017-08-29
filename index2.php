<?php

funcTion turis ($a, $b, $z)
{
  $suma = ($a * $b * $z);

  return $suma;
}

funcTion kiekis ($s, $a, $b, $z) 
{
$kiekis = ($a * $b * $z/$s);

return $kiekis;}





?>
   

    <!DOCTYPE html>
    <html>
    <head>

    
    <title>namu darbas</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"


    </head>

    <body>

  <table class="table table-bordered container">
  <thead class="thead-inverse">
    
    <tr class="row">
    
      <th class="col">Ilgis</th>
      <th class="col">Plotis</th>
      <th class="col">Gylis<th>
      <th class="col">Turis</th>
      <th class="col">10m3</th>
      <th class="col">30m3</th>

    </tr>
  </thead>
  <tbody>
    <tr class="row">
      <td class="col">1</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (1, 3, 1.5)
        ?>
      </td>
      <td class="col">
      <?php
      echo "kiekis" (10, 1, 3, 1.5)
      ?>
      </td>
      <td class="col">
        <?php
      echo "kiekis" (30, 1, 3, 1.5)
      ?>
      </td>
      
    </tr>
    <tr class="row">
      <td class="col">2</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col" id="turis">
        <?php
        echo "turis" (2, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">3</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (3, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">4</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (4, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">5</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (5, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">6</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (6, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">7</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (7, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">8</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (8, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">9</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (9, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
      
    </tr>
    <tr class="row">
      <td class="col">10</td>
      <td class="col">3</td>
      <td class="col">1.5</td>
      <td class="col">
         <?php
        echo "turis" (10, 3, 1.5)
        ?>
      </td>
      <td class="col"></td>
      <td class="col"></td>
    </tr>
  </tbody>
</table>
