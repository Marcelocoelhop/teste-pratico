<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $erros = array();

  if (empty($nome)) {
    $erros[] = "O campo do nome não pode estar vazio.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "O endereço de e-mail inserido não é válido.";
  }

  if (empty($senha)) {
    $erros[] = "O campo da senha não pode estar vazio.";
  }

  if (!empty($erros)) {
    foreach ($erros as $erro) {
      echo $erro . "<br>";
    }
  } else {
    echo "Dados cadastrados com sucesso!!! " . "<br> <br>";
    echo "Nome: " . $nome . "<br>";
    echo "E-mail: " . $email . "<br>";
  }
} else {
  echo "Erro: O formulário não foi enviado.";
}
?>
