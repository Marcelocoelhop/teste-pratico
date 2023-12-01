<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if(isset($_POST['enviar'])){
      $nome = $_POST['name'];
      $email = $_POST['email'];

      // Verifica se o campo "nome" não está vazio e se o email informado é valido
      if(!empty($_POST['name']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo "O nome do usuário é $nome e o seu email é $email";
      }
      else{
        echo "Por favor, preencha o campo nome corretamente e forneça um endereço de e-mail válido.";
      }
    }
  ?>
</body>
</html>
