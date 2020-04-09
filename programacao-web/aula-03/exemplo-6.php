<?php
    function somatorio() {
        static $soma = 0;
        $soma = $soma + 1;
        echo "O valor é ". $soma . "<br />";
    }
    
    somatorio();
    somatorio();
    somatorio();
?>
