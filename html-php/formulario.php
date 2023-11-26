<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste prático HTML e PHP</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <section id="form" class="container">
    <!-- tag form que chama o arquivo processa_formulario.php através do método post -->
    <form action="processa_formulario.php" method="post" class="form-section">
      <h1 class="title-form">Formulário de contato da <a target="_blank" href="https://www.manualdoproprietario.com.br/">ProConsult
          engenharia</a>
      </h1>

      <!-- Fundo desfocado -->
      <div id="overlay" class="overlay"></div>

      <?php
      if (isset($_SESSION['flash'])) {

        // altera a visibilidade dos itens para a modal e o fundo.
        echo "<script type='text/javascript'>
                window.onload = function() {
                    var modal = document.getElementById('modal');
                    var message = document.getElementById('message');
                    var overlay = document.getElementById('overlay');
                    modal.style.display = 'flex';
                    overlay.style.display = 'block';
                };
              </script>";
      }
      ?>

      <!-- Modal para a mensagem de sucesso -->
      <div id="modal" class="modal">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" onclick="closeAndRedirect()" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-btn">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

        <div id="message" class="message">
          <div class="success">
            <h1>Usuário criado com Sucesso!</h1>
            <p>
              Nome:
              <span>
                <?php
                // Verificar se o nome está disponível na sessão flash e exibi-lo
                if (isset($_SESSION['flash']['name'])) {
                  echo htmlspecialchars($_SESSION['flash']['name']);
                }
                ?>
              </span>
            </p>
            <p>
              Email:
              <span>
                <?php
                // Verificar se o email está disponível na sessão flash e exibi-lo
                if (isset($_SESSION['flash']['email'])) {
                  echo htmlspecialchars($_SESSION['flash']['email']);
                }
                ?>
              </span>
            </p>

            <button type="button" onclick="closeAndRedirect()">OK</button>
          </div>
        </div>

      </div>

      <!-- Campos do formulário -->
      <div class="group-form">
        <div class="input-form">
          <label for="name">Nome<span class="required">*</span>:</label>
          <!-- Função old para guardar o nome e email após as validações darem errado, é comum resetar as senhas mesmo. -->
          <input type="text" name="name" id="name" placeholder="Exemplo: Christian Steffens" value="<?php echo isset($_SESSION['old']['name']) ? htmlspecialchars($_SESSION['old']['name']) : ''; ?>">
          <span id="name-error-message" class="error-message"></span>
          <!-- Exibe os erros do campo nome -->
          <?php
          if (isset($_SESSION['errors']['name'])) {
            echo "<span class='error-message'>" . htmlspecialchars($_SESSION['errors']['name']) . "</span>";
          }
          ?>
        </div>

        <div class="input-form">
          <label for="email">Email<span class="required">*</span>:</label>
          <input type="email" name="email" id="email" placeholder="example@gmail.com" value="<?php echo isset($_SESSION['old']['email']) ? htmlspecialchars($_SESSION['old']['email']) : ''; ?>">
          <span id="email-error-message" class="error-message"></span>
          <?php
          if (isset($_SESSION['errors']['email'])) {
            echo "<span class='error-message'>" . htmlspecialchars($_SESSION['errors']['email']) . "</span>";
          }
          ?>
        </div>

        <div class="input-form">
          <label for="password">Senha<span class="required">*</span>:</label>
          <div class="relative">
            <input type="password" name="password" id="password">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye-password">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye-slash-password">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>
          </div>
          <span id="password-error-message" class="error-message"></span>
          <?php
          if (isset($_SESSION['errors']['password'])) {
            echo "<span class='error-message'>" . htmlspecialchars($_SESSION['errors']['password']) . "</span>";
          }
          ?>
        </div>

        <div class="input-form">
          <label for="confirm_password">Confirme a senha<span class="required">*</span>:</label>
          <div class="relative">
            <input type="password" name="confirm_password" id="confirm_password">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye-confirm-password">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="eye-slash-confirm-password">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>
          </div>
          <span id="confirm-password-error-message" class="error-message"></span>
          <?php
          if (isset($_SESSION['errors']['confirm_password'])) {
            echo "<span class='error-message'>" . htmlspecialchars($_SESSION['errors']['confirm_password']) . "</span>";
          }
          ?>
        </div>
        <!-- botão de submit -->
        <button type="submit" class="btn-submit">Enviar</button>
      </div>

    </form>
  </section>

  <!-- para utilizar as validações front end, basta descomentar o script abaixo -->
  <!-- <script src="validation.js"></script> -->

  <!-- script para alterar a visibilidade dos inputs de senhas -->
  <script src="toggle-password.js"></script>
</body>

</html>
<script>
  // Fecha a modal e redireciona para o arquivo html, (remove os parametros da url)
  function closeAndRedirect() {
    document.getElementById('modal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
    window.location.href = 'formulario.php';
  }
</script>
<!-- reseta os erros, campos e mensagens -->
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}

if (isset($_SESSION['old'])) {
  unset($_SESSION['old']);
}

if (isset($_SESSION['flash'])) {
  unset($_SESSION['flash']);
}
