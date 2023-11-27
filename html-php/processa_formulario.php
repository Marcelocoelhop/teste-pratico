<?php

function handleSubmit($name, $email, $password) {
  if (empty($name)) {
    echo "O campo nome é obrigatório.";
  } elseif(empty($email)) {
    echo "O campo e-mail é obrigatório.";
  } elseif(empty($password)) {
    echo "O campo senha é obrigatório.";
  } else {
    echo "Nome: ${name} | E-mail: {$email}";
  }
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

handleSubmit($name, $email, $password);

?>