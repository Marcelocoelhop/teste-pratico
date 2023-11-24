<?php
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$senha = filter_input(INPUT_POST, "senha");
echo "O nome digitado é " . $nome . "<br/> O email digitado é " . $email;
if (strlen($nome))
  echo "<br/> O campo nome não está vázio";
if (filter_var($email, FILTER_VALIDATE_EMAIL))
  echo "<br/> O email é valido";

?>