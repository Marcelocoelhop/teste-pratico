<?php
  // SEU CÓDIGO PHP AQUI
  


function validarFormulario($nome, $email, $senha) {
  // Verifica se todos os campos estão preenchidos
  if (empty($nome) || empty($email) || empty($senha)) {
      return "Todos os campos são obrigatórios.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return "O email inserido não é válido.";
  }
  return "Formulário válido. Dados: Nome: $nome, Email: $email, Senha: $senha";
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$resultadoValidacao = validarFormulario($nome, $email, $senha);

echo $resultadoValidacao;
?>