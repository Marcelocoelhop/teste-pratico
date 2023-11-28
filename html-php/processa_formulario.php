<?php

    function validar(){
           $campos = array('nome' => 'Informe o nome.', 'email' => 'Informe o e-mail.', 'senha' => 'informe a senha.');
            foreach ($campos AS $k => $msg) {
                if ($_POST[$k] == '') {
                    echo $msg;
                    return false;
                }
            }
             return true;
    }

    function validaEmail($email) {
        $conta = "/^[a-zA-Z0-9\._-]+@";
        $domino = "[a-zA-Z0-9\._-]+.";
        $extensao = "([a-zA-Z]{2,4})$/";
        $pattern = $conta.$domino.$extensao;
        if (preg_match($pattern, $email, $check))
            return true;
        else
            return false;
    }

    if(validar()) {
        if (validaEmail($_POST['email'])) {
            //Não exibe nada e continua o formúlaro
        } else {
            echo "O e-mail inserido é invalido!";
            return false;
        }

        //Recupere os dados enviados pelo formulário.
        //====================================================
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //====================================================

        //Exiba uma mensagem na tela, mostrando o nome e o email recebidos.
        //====================================================
        $mensagem = 'Dados recebidos: Nome - ' . $nome . ' e senha: ' . $senha;
        echo $mensagem;

    }
?>