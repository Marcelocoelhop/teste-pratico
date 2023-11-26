<?php
session_start(); // Inicia a sessão

// Verifica se o método é post, se não for 
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // Poderia retornar uma página para exibir um erro personalizado da seguinte forma:
    // header("Location: error.html");
    // exit;

    // Caso o usuário tente acessar a url como get diretamente, eu mato a aplicação e exibo a mensagem abaixo.
    die("Acesso negado!");
}

// Conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "proconsult";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//Validação para o nome
function validateName($name)
{
    //Se o campo estiver vazio retorna é obrigatório.
    if (empty($name)) {
        return 'Este campo é obrigatório.';
        //Regex para validar que o nome não tenha números, caracteres especiais etc... apenas letras.
    } elseif (!preg_match('/^[a-zA-ZÀ-ÿ ]+$/u', $name)) {
        return 'O nome deve conter apenas letras e espaços.';
    } elseif (strlen($name) > 30) {
        // Verifica se o nome tem mais de 30 caracteres.
        return 'O nome deve ter no máximo 30 caracteres.';
        // Verifica se tem espaço, afim de pegar o nome completo do usuário (com 2 ou mais palavras)
    } elseif (substr_count($name, ' ') < 1) {
        return 'Por favor, insira seu nome completo.';
    }
    return '';
}

function validateEmail($email)
{
    if (empty($email)) {
        return 'Este campo é obrigatório.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Por favor, insira um endereço de e-mail válido.';
    } elseif (strlen($email) > 100) {
        return 'O email deve ter no máximo 100 caracteres.';
    }
    return '';
}
//Aplica um regex de acordo com a mensagem.
function validatePassword($password)
{
    if (empty($password)) {
        return 'Este campo é obrigatório.';
    } elseif (strlen($password) < 8) {
        return 'A senha deve ter no mínimo 8 caracteres.';
    } elseif (!preg_match('/[A-Z]/', $password)) {
        return 'A senha deve conter pelo menos uma letra maiúscula.';
    } elseif (!preg_match('/[a-z]/', $password)) {
        return 'A senha deve conter pelo menos uma letra minúscula.';
    } elseif (!preg_match('/[0-9]/', $password)) {
        return 'A senha deve conter pelo menos um número.';
    } elseif (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
        return 'A senha deve conter pelo menos um caractere especial.';
    } elseif (strlen($password) > 100) {
        return 'A senha deve ter no máximo 100 caracteres.';
    }
    return '';
}
function validateConfirmPassword($password, $confirmPassword)
{
    if (empty($confirmPassword)) {
        return 'Este campo é obrigatório.';
        // Verifica se as senhas são diferentes.
    } elseif ($password !== $confirmPassword) {
        return 'As senhas não coincidem.';
    }
    return '';
}

// Atribui os erros de acordo com a sua respectiva validação.
$nameError = validateName($name);
$emailError = validateEmail($email);
$passwordError = validatePassword($password);
$confirmPasswordError = validateConfirmPassword($password, $_POST['confirm_password']);

if ($nameError || $emailError || $passwordError || $confirmPasswordError) {
    $_SESSION['errors'] = [
        'name' => $nameError,
        'email' => $emailError,
        'password' => $passwordError,
        'confirm_password' => $confirmPasswordError,
    ];
    // faz uma sessão old para guardar os campos de nome e email
    $_SESSION['old'] = [
        'name' => $name,
        'email' => $email
    ];

    // Se a validação falhar ele retorna para o arquivo anterior.
    header('Location: formulario.php');
    exit;
}

// Se não houver erros, continua com a inserção no banco de dados

// Criptografa a senha antes de salvar no banco de dados
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL para inserir os dados
$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

// Preparar a declaração para evitar SQL Injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $hashed_password); // 'sss' indica que os três parâmetros são strings

// Executar e verificar se a inserção foi bem-sucedida
if ($stmt->execute()) {
    // Cria uma sessão flash
    $_SESSION['flash'] = [
        'name' => $name,
        'email' => $email
    ];

    // redireciona para formulario.php
    header("Location: formulario.php");
    exit;
} else {
    echo "Erro: " . $stmt->error;
}
// Fecha a declaração e a conexão respectivamente.
$stmt->close();
$conn->close();
