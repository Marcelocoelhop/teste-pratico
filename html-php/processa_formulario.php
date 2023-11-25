<?php
$nomeEnviado = $_POST['nome'];
$emailEnviado = $_POST['email'];

function validarNome($nome)
{
  return $nome ? true : false;
}

function validarEmail($email)
{
  return $email && filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
}

echo '<a href="formulario.html">Voltar</a><br>';

if (validarNome($nomeEnviado) && validarEmail($emailEnviado)) {
  echo "Nome: {$nomeEnviado} <br> Email: {$emailEnviado}";
} else {
  echo !validarNome($nomeEnviado) ? "O nome não foi preenchido corretamente!<br>" : "";
  echo !validarEmail($emailEnviado) ? "O email não foi preenchido corretamente!" : "";
}
