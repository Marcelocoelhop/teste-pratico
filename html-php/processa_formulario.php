<?php
  $nome = '';
  $email = '';
  $senha = '';

  if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
  }

  if (isset($_POST['email'])) {
    $email = $_POST['email'];
  }

  if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste prático HTML e PHP</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/9ba1892be6.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1339248804.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(243, 243, 243);">
  
  <div class="row">
      <img class="img-fluid rounded mx-auto d-block mt-5" src="logo.png" alt="" style="width: 400px;">
      <h4 class="mt-4 mb-5 text-center text-secondary">Teste prático HTML e PHP</h4>
     
      <?php
        if($nome == '') {
          echo "<h4 style='width: 450px;' class='bg-danger text-white text-center mt-4 p-2 ms-auto me-auto'>" . 
          'Erro <i class="fa-solid fa-triangle-exclamation"></i><br> 
          <br>O campo nome está vazio!' . "</h4>";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<h4 style='width: 450px;' class='bg-danger text-white text-center mt-4 p-2 ms-auto me-auto'>" . 
          'Erro <i class="fa-solid fa-triangle-exclamation"></i><br> 
          <br>Email inválido! <br> Digite um email válido.' . "</h4>";
        } else {
          echo "<h4 style='width: 450px;' class='bg-success text-white text-center mt-4 p-2 ms-auto me-auto'>" . 
          'Sucesso <i class="fa-solid fa-check"></i><br>
          <br> <i class="fa-regular fa-user"></i> Nome: ' . $nome . 
          '<br> <i class="fa-solid fa-at"></i> Email: ' . $email . "</h4>";
        }
      ?>
  </div>

  <div style="width: 450px;" class="ms-auto me-auto mt-4 bg-white border border-light rounded p-3">
        <form action="formulario.html" method="get">
            <button type="submit" class="btn btn-primary w-100">Voltar <i class="fa-solid fa-rotate-left"></i></button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>