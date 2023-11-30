<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["name"];
    $email = $_POST["email"];

    $errors = [];

    if (empty($nome)) {
        $errors[] = 'name';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'email';
    }

    if (!empty($errors)) {
        echo json_encode(array('success' => false, 'errors' => $errors));
        exit();
    }

    echo json_encode(array(
        'success' => true,
        'message' => "<span class=\"close-btn\">&times;</span><strong>Nome:</strong> $nome<br><strong>Email:</strong> $email"
    ));
} else {
    header("Location: formulario.html");
    exit();
}
?>