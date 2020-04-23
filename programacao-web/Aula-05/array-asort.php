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
    
    asort($paises);
    
    foreach($paises as $p){
        echo "Pais " . $p . "<br />";
    }
        
?>