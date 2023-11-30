<?php
  
  $nome = isset($_POST['nome']) ? trim($_POST['nome']) : null;
  $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : null;
  $msg = '';

  if(empty($nome)){
    $msg .= "Campo Nome não pode ser vazio. <br>";
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
    $msg .= "Campo Email vazio ou inválido.";
  }
   
  if($msg == ''){
    echo "Nome: {$nome} <br> Email: {$email} <br>";
  }else{
    echo $msg ."<br>";
  }
  
  echo "<a href='./formulario.html'>Voltar</a>";

?>