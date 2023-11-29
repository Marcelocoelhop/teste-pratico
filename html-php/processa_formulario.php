<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Teste prático HTML e PHP</title>
</head>
<body>
  <main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      if (empty($nome)) {
        echo "<div class='info' id='error'>";
        echo "<h2>O campo Nome não pode estar vazio.</h2>";
        echo "<a href='formulario.html'><button>Voltar ao formulário</button></a>";
        echo "</div>";
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='info' id='error'>";
        echo "<h2>O email inserido não é válido.</h2>";
        echo "<a href='formulario.html'><button>Voltar ao formulário</button></a>";
        echo "</div>";
      } else {
        echo "<div class='info'>";
        echo "<h2>Olá, $nome!</h2>";
        echo "<h2>Seu email é: $email</h2>";
        echo "</div>";
      }
    }
    ?>
  </main>
</body>
</html>