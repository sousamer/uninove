<?php

  $nomeDoCookie = "usuario";
  $valorDoCookie = "Enzo Gabriel";

  setcookie(
    $nomeDoCookie, // nome do cookie
    $valorDoCookie, // valor do cookie
    time() + (86400 * 30) // validade do cookie
  );
?>