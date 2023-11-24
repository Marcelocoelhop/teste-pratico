<?php
$is_valid = true;
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $name = $_POST["name"];
  $email = $_POST["email"];

  if (empty($name)) {
    $is_valid = false;
    echo "<p>Ops. O campo nome está vazio!</p>";
    return;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Ops. O email digitado não é válido!</p>";
    return;
  }

  echo "Seu nome é: " . $name . "<br>";
  echo "Seu email é: " . $email;
}
