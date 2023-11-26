<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $nome = $_POST["user_name"];
      $email = $_POST["user_mail"];
      $password = $_POST["user_pass"];

      if(empty($nome) || empty($email) || empty($password) || !(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        print "Preencha o formulário corretamente!<br>";
        empty($nome) && print "Campo nome está vazio! <br>";
        empty($email) && print "Campo email está vazio! <br>";
        empty($password) && print "Campo senha está vazio! <br>";
        !(filter_var($email, FILTER_VALIDATE_EMAIL)) && print "Email inválido! <br>";
        print '<a href="formulario.html">Voltar</a>';
      }else(
        print "Nome: $nome <br> Email: $email <br>"
      );

  } else {
      header("Location: formulario.html");
      exit();
  }
  
?>