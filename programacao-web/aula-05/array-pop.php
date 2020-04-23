<?php

    $cestaDeFrutas = array(
        "Uva",
        "Maçã",
        "Laranja"
    );
    
    $fruta = array_pop($cestaDeFrutas);
    
    echo "A fruta removida foi " . $fruta . "<br />";
    
    foreach($cestaDeFrutas as $f) {
        echo $f . "<br />";
    }
    
?>