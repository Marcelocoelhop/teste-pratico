<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacoes = array();

  if (empty($nome)) {
    $validacoes[] = "Nome obrigatório.";
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes[] = "Informe um endereço de email válido.";
  }

  if (empty($validacoes)) {
    echo "Dados recebidos com sucesso!";
    echo "<br>Nome: $nome";
    echo "<br>Email: $email";

  } else {
    foreach( $validacoes as $validacoes) {
      echo "$validacoes<br>";
    }
  }
 } else {
  echo "Requisição inválida.";
 };
?>