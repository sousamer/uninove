<?php
    $paises = array(
        "Argentina",
        "Argentina",
        "Brasil",
        "Uruguai",
        "Colombia",
        "Chile"
    );
    
    $semPaisRepetido = array_unique($paises);
    
    foreach($semPaisRepetido as $pais) {
        echo "Pais " . $pais . "<br />";
    }    
        
?>