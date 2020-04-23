<?php
    $paises = array(
        "Chile",
        "Alemanha",
        "Argentina",
        "Argentina",
        "Marrocos",
        "Brasil",
        "Uruguai",
        "Zimbabue",
        "Colombia"
    );
    
    arsort($paises);
    
    foreach($paises as $p){
        echo "Pais " . $p . "<br />";
    }
        
?>