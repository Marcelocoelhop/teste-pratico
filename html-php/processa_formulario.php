<?php

  if(!$_POST){ $_POST = json_decode(file_get_contents('php://input'), true); }

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $erros = [];

  if( empty($nome) ){
    $erros[] = "O campo nome não pode estar vazio.";
  }
  if( strlen($email) < 8 || !strstr($email,'@') ){
    $erros[] = "E-mail digitado incorretamente.";
  }
  if( strlen($senha) < 3 ){
    $erros[] = "A senha deve possuir ao menos 3 caracteres";
  }

  if($erros) echo json_encode($erros);
  else{
    echo json_encode(['nome' => $nome,'email'=>$email]);
  }
  
  
  
?>