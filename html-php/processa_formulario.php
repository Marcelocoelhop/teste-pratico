<?php

session_start();

function sanitize(string $data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validationInput(string $name, string $rules, &$errors): void
{
  $rules = explode(', ', $rules);

  $sanitizedValue = sanitize($_POST[$name]);

  if( in_array('required', $rules) && empty($_POST[$name]) ) {
    $errors[$name] = "{$name} é obrigatório";
    return;
  }

  if( in_array('string', $rules, true) && !preg_match('/^[a-zA-Z0-9]+$/', $sanitizedValue) ) {
    $errors[$name] = "{$name} deve conter apenas letras e números";
    return;
  }

  if( in_array('email', $rules, true) && !filter_var($sanitizedValue, FILTER_SANITIZE_EMAIL)) {
    $errors[$name] = "{$name} deve ser um email válido";
    return;
  }

}

// 1. Old values

$old_values = array(
  'name' => $_POST['name'] ? $_POST['name'] : '',
  'email' => $_POST['email'] ? $_POST['email'] : '',
  'password' => $_POST['password'] ? $_POST['password'] : ''
);

$_SESSION['old_values'] = $old_values;

// 2.Validation

$errors = array();

validationInput('name', 'required, string', $errors);
validationInput('email', 'required, email', $errors);
validationInput('password', 'required', $errors);


if (!array_filter($errors)) {
  
  $_SESSION['success_message'] = 'Formulário enviado.';
  unset($_SESSION['old_values']);
  header('Location: formulario.php');
  
} else {

  $_SESSION['errors'] = $errors;
  header('Location: formulario.php');

}
