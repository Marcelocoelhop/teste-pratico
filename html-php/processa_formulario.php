<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST["nome"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    if (empty($name) || empty($email)) {
      echo "Por favor, preencha todos os campos.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Formato de email inválido.";
    } else {
      echo "Seu nome: " . $name . "<br>";
      echo "Seu email: " . $email;
    }
  }
?>