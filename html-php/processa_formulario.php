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

      echo "O nome do usuário é $nome e o seu email é $email";
    }
  ?>
</body>
</html>
