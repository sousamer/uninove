<?php 
     $bandas=array("Pearl Jam","Metallica","Nirvana","New Order", "Angra","Faith No More");
     $i = count($bandas);
     echo "Foram encontradas $i bandas no array.";
     echo "<br>";
     echo "e são elas:<br>";
     foreach($bandas as $x=>$x_value){
          echo "Banda[" . $x . "]: " .  $x_value;
          echo "<br>";
     }
?>