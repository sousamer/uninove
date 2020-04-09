<?php

    function quadrado() {
        global $numero;
        $numero = 3;
        $numero = $numero * $numero;
    }
    
    quadrado();
    
    echo "O quadrado do número 3 é ". $numero;
?>
