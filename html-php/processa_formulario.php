<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Validação básica
  $erros = [];

  if (empty($nome)) {
      $erros[] = "O campo Nome é obrigatório.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erros[] = "O campo Email deve conter um endereço de email válido.";
  }

  // Exibe mensagens de erro ou os dados recebidos
  if (count($erros) > 0) {
      // Exibe mensagens de erro
      foreach ($erros as $erro) {
          echo "<p>$erro</p>";
      }
  } else {
      // Exibe a mensagem de sucesso com os dados recebidos
      echo "<p>Dados recebidos com sucesso:</p>";
      echo "<p>Nome: $nome</p>";
      echo "<p>Email: $email</p>";
  }
}
?>