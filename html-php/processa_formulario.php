<?php
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $erros = array();

  if(!$nome) array_push($erros, "Nenhum nome foi inserido!");
  if(!$email) array_push($erros, "Nenhum e-mail foi inserido!");
  if(!$senha) array_push($erros, "Nenhuma senha foi inserida!");

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($erros, "O e-mail inserido é inválido!");

  if($erros) {
    foreach ($erros as $erro) {
      echo "<h3 style='font-family: sans-serif; color: red;>Não foi possível concluir a execução devido aos seguintes erros:</h3>";
      echo "<p style='font-family: sans-serif; color: red;'>" . $erro . "</p>";
    }
  } else {
    echo "<h3 style='font-family: sans-serif;'>Informações recebidas: </h3>";
    echo "<p style='font-family: sans-serif;'>Nome: " . $nome . "</p>";
    echo "<p style='font-family: sans-serif;'>E-mail: " . $email . "</p>";
  }
?>