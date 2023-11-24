<?php

  $name = $_POST["name"];
  $email = $_POST["email"];

  if ($name == "") {
    exit('O campo nome está vazio.');
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('O endereço de email não é válido.');
  }

  echo 'Nome recebido:' . $name;
  echo '</br>';
  echo 'E-mail recebido:' . $email;

?>