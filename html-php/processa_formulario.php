<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $errors = array();

    if (empty($nome)) {
        $errors[] = "O campo do nome não pode estar vazio.";
    }

    if (empty($senha)) {
        $errors[] = "O campo de senha não pode estar vazio.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "O endereço de email não é válido.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<h3>Dados Recebidos:</h3>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
    }
} else {
    echo "<p>Error: O formulário não foi enviado.</p>";
}
?>
