<?php
if (isset($_GET)) {
	if (!isset($_GET['nome']) || $_GET['nome'] == '') {
		echo '<h1>Nome não pode ser vazio</h1>';
	}
	else if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		echo '<h1>Email inválido</h1>';
	}
	else {
		echo 'Nome: '.$_GET['nome'].'<br>';
		echo 'Email: '.$_GET['email'].'<br>';	
	}
}
?>
