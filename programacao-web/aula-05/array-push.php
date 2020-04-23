<?php

    $cestaDeFrutas = array(
        "Uva",
        "Maçã",
        "Laranja"
    );
    
    array_push($cestaDeFrutas, "Melancia");
    
    foreach($cestaDeFrutas as $f) {
        echo $f . "<br />";
    }
    
?>