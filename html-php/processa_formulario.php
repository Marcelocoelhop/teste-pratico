<?php
  include("Validate.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      if(Validate::name($name) && Validate::email($email) && Validate::password($password)){
        echo "<h1>DADOS RECEBIDOS</h1>";
        echo "<br>";
        echo "Nome: ". $name;
        echo "<br>";
        echo "Email: ". $email;
        echo "<br>";
        echo "Senha: ". $password;
        return;
      }

      echo "<h1>ERRO NA VALIDAÇÃO</h1>";
      if(!Validate::name($name)){
        echo "<br>";
        echo "Nome não pode ser nulo";

      }

      if(!Validate::email($email)){
        echo "<br>";
        echo "Email inválido";
      }

      if(!Validate::password($password)){
        echo "<br>";
        echo "Senha deve ter pelo menos 8 caracteres";
      }
  }
?>