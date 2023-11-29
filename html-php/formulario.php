<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste prático HTML e PHP</title>

  <style>

    body {
      min-height: 400px;
      font-size: 16px;
    }

    body,
    fieldset {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-flow: column nowrap;
      gap: .7rem;
      width: 100%;
    }

    .form-field {
      display: flex;
      flex-flow: column nowrap;
      width: 100%;
      gap: 2px;
    }

    @media(min-width: 992px) {
      fieldset {
        max-width: 800px;
      }
    }

  </style>

</head>
<body>
  <?php
    session_start();

    $oldName = isset($_SESSION['old_values']['name']) ? $_SESSION['old_values']['name'] : '';
    $oldEmail = isset($_SESSION['old_values']['email']) ? $_SESSION['old_values']['email'] : '';
    $oldPassword = isset($_SESSION['old_values']['password']) ? $_SESSION['old_values']['password'] : '';

    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();

    $success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';

    unset($_SESSION['errors']);
    unset($_SESSION['success_message']);
  ?>
  <form action="/processa_formulario.php" method="POST">

    <fieldset>

      <legend>Formulário</legend>

      <div class="form-field">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Digite o nome" value="<?= htmlspecialchars($oldName); ?>" />
        <span style="color: red;"><?= isset($errors['name']) ? $errors['name'] : ''; ?></span>
      </div>

      <div class="form-field">
        <label>Email</label>
        <input type="email" name="email" placeholder="Digite o email" value="<?= htmlspecialchars($oldEmail); ?>"  />
        <span style="color: red;"><?= isset($errors['email']) ? $errors['email'] : ''; ?></span>
      </div>

      <div class="form-field">
        <label>Senha</label>
        <input type="password" name="password" placeholder="Digite a senha" value="<?= htmlspecialchars($oldPassword); ?>"  />
        <span style="color: red;"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>
      </div>

      <div class="form-field">
        <input type="submit" value="Enviar"/>
      </div>

    </fieldset>
  </form>

  <?php
    if ($success_message) {
        echo "<p style='color: green;'>$success_message</p>";
    }
  ?>
</body>
</html>