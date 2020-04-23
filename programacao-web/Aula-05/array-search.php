<?php

    $cestaDeFrutas = array(
        "Uva",
        "Maçã",
        "Laranja"
    );
    
    $chave = array_search("Laranja", $cestaDeFrutas);
    
    echo $cestaDeFrutas[$chave];
    
?>