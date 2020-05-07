<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["txt_nome"];
    $erroNome = "";
    if(empty($_POST["txt_nome"])) {
      $erroNome = "O campo nome está vazio!";
    }
  }
?>
<html>
  <head>
    <title>PHP - Formulário</title>
    <style>
      .error {
        color: #f00;
      }
    </style>
  </head>
  <body>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Digite o nome:</label><br />
    <input type="text" name="txt_nome" /> <br /><br />
    <span class="error">* <?php echo $erroNome; ?></span>

    <input type="submit" value="Enviar Dados" />
  </form>

  </body>
</html>