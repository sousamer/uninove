<?php
  session_start();
?>
<html>
<head>
  <title>PHP - $_SESSION</title>
</head>
<body>
  <?php

    echo "Olá " . $_SESSION["usuario"] . " tudo bem?";
  ?>
</body>

</html>