<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera os dados do formulário
  $nome = htmlspecialchars($_POST["nome"]);
  $email = htmlspecialchars($_POST["email"]);
  $senha = htmlspecialchars($_POST["senha"]);

  // Validação básica
  $erros = array();

  // Verifica se o campo do nome não está vazio
  if (empty($nome)) {
    $erros[] = "O campo do nome é obrigatório.";
  }

  // Verifica se o campo do email é um endereço de email válido
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "O campo do email deve conter um endereço de email válido.";
  }

  // Exibe mensagens de erro, se houver
  if (!empty($erros)) {
    foreach ($erros as $erro) {
      echo "<p style='color: red;'>$erro</p>";
    }
  } else {
    // Exibe mensagem de sucesso
    echo "<p style='color: green;'>Dados recebidos com sucesso:</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Senha: $senha</p>";
  }
}
?>
