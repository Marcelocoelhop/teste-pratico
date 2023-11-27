<?php

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if($nome != null){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Dados Recebidos com sucesso! nome: $nome, email: $email";
    }else{
      echo "Insira um email valido";
    };
  }else{
    echo "Insira um nome";
  };

?>