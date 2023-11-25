<?php
// SEU CÓDIGO PHP AQUI

$errorMessages = array();
if (isset($_POST['name']) && !empty($_POST['name']))  $name = addslashes($_POST['name']);
else $errorMessages[] = "Campo nome vazio!";


if (isset($_POST['email']) && !empty($_POST['email'])) {
  $isEmailValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  if ($isEmailValid) $email = addslashes($_POST['email']);
  else $errorMessages[] = "Email inválido!";
} else {
  $errorMessages[] = "Campo email vazio!";
}

if (isset($_POST['password']) && !empty($_POST['password'])) $senha = addslashes($_POST['password']);
else $errorMessages[] = "Campo senha vazio!";

?>
<link href="./css/style.css" rel="stylesheet">

<div class="container gap-0">
  <?php if (!empty($errorMessages) && isset($errorMessages)) { ?>
    <?php foreach ($errorMessages as $message) { ?>
      <p class='error-message'><span class="bold">ERROR:</span> <?= $message ?></p>
    <?php } ?>
  <?php } else { ?>
    <p class='info'><span class="bold">Nome:</span> <?= $name ?></p>
    <p class='info'><span class="bold">Email:</span> <?= $email ?></p>
  <?php } ?>

  <a class="button" href="./formulario.html">Voltar</a>
</div>