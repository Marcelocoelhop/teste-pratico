<?php
$submit = $_POST['submit'];

if (!isset($submit)) {
  header('Location: formulario.html');
}

$errors = [];

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Email inválido!';
}

if (empty($username)) {
  $errors[] = 'Nome de usuário em branco!';
}

if (!empty($username) && strlen($username) < 3) {
  $errors[] = "O nome deve ter 3 caracteres ou mais";
}


if (empty($password)) {
  $errors[] = 'Senha em branco!';
}

if (!empty($password) && strlen($password) < 6) {
  $errors[] = "A senha deve ter no mínimo 6 caracteres.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Processa dados</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-size: 16px;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      display: flex;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      display: flex;
      flex-direction: column;
      width: 960px;
      height: 400px;
      margin: 0 auto;
      background-color: #FBAB7E;
      padding: 24px;
      border-radius: 12px;
    }

    .container.danger {
      background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);
    }

    .container.success {
      background: linear-gradient(27deg,
          rgba(50, 93, 164, 1) 0%,
          rgba(63, 235, 179, 1) 100%);
    }

    .alert {
      display: block;
      padding: 12px 24px;
      background-color: white;
      font-weight: bold;
      color: white;
      border-radius: 4px;
      margin-bottom: 12px;
    }

    .alert.danger {
      background-color: #F52767;
    }

    .alert.danger li:not(:last-child) {
      margin-bottom: 8px;
    }

    .alert.success {
      background-color: #aedd2d;
    }

    .body {
      background-color: white;
      padding: 12px 24px;
      margin-bottom: 12px;
      border-radius: 4px;
    }

    .body p:not(:last-child) {
      margin-bottom: 8px;
    }

    button {
      border: 2px solid white;
      background-color: orange;
      color: white;
      padding: 12px;
      border-radius: 4px;
      align-self: baseline;
      font-weight: bold;
      text-transform: uppercase;
    }
  </style>
</head>

<body>
  <?php if (!empty($errors)) : ?>
    <section class="container danger">
    <?php endif; ?>
    <?php if (empty($errors)) : ?>
      <section class="container success">
      <?php endif; ?>
      <?php if (!empty($errors)) : ?>
        <div class="container-alert">
          <ul class="alert danger">
            <?php foreach ($errors as $error) : ?>
              <li><?= $error; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if (empty($errors)) : ?>
        <div class="container-alert">
          <h5 class="alert success">Dados enviados com sucesso!</h5>
        </div>
        <div class="body">
          <p><strong>Nome: </strong> <?= $username; ?></p>
          <p><strong>Email: </strong> <?= $email; ?></p>
          <p><strong>Senha: </strong> <?= $password; ?></p>
        </div>

      <?php endif; ?>

      <button onclick="window.history.go(-1); return false;">Voltar</button>
      </section>
</body>

</html>