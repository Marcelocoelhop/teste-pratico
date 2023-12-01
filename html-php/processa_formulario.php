<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $erros = array();

    if (empty($nome)) {
      array_push($erros, "Preencha o campo nome.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($erros, "Insira um e-mail válido.");
    }

    if (empty($senha)) {
      array_push($erros, "Preencha o campo senha.");
    }

    if (empty($erros)) {
      echo "Formulário enviado com sucesso!<br>";
      echo "Nome: " . htmlspecialchars($nome) . "<br>";
      echo "E-mail: " . htmlspecialchars($email) . "<br>";
      echo "Senha: " . htmlspecialchars(str_repeat("*", strlen($senha))) . "<br>";
    } else {
      echo "Erro ao enviar o formulário:<br>";
      foreach ($erros as $erro) {
        echo "- " . htmlspecialchars($erro) . "<br>";
      }
    }
  } else {
    echo "Erro ao enviar o formulário: Acesso inválido.";
  }
?>