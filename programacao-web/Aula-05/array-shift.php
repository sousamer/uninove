<?php

    $cestaDeFrutas = array(
        "Uva", // [0]
        "Maçã", // [1]
        "Laranja" // [2]
    );
    
    $fruta = array_shift($cestaDeFrutas);
    
    foreach($cestaDeFrutas as $f) {
        echo $f . "<br />";
    }
?>