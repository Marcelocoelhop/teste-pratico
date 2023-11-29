<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Retorno formulario</title>
  <style>
    * {
        margin: 0;
        padding: 0;
    }
    body {
        margin: 0 5px;
    }
    h1 {
        padding: 5px 0;
    }
    div {
        padding: 2px 0;
    }
  </style>
</head>
<body>
    <header>
        <h1>Formulario preenchido com exito</h1>
    </header>
    <main>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    
    $errors = array();
    
    if (empty($nome)) {
        $errors["error_name"] = true;
    } else {
        $errors['nome'] = $nome;
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["error_email"] = true;
    } else {
        $errors['email'] = $email;
    }
    
    if (isset($errors["error_name"]) || isset($errors["error_email"])) {
        $query_string = http_build_query($errors);
        header("Location: formulario.html?" . $query_string);
        exit();
    } else {
        echo "<div><p>Nome: $nome </p>";
        echo "<p>Email: $email </p></div>";
    }
}
?>
    <h4>Obrigado por preencher o formulario</h4>
    </main>

</body>
</html>
