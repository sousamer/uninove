<?php

$nome = "Tereza";
//echo $nome;

function mostraNome() {
  echo "O nome é " . $GLOBALS["nome"];
  //echo "O nome é: " . $nome;
}

mostraNome();

?>