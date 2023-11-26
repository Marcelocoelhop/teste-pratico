// Validações do formulário em front end.
function validateName() {
    // Inicia uma variável para armazenar mensagens de erro, inicialmente vazia.
    var nameErrorMessage = '';

    // Obtém o valor do campo de nome e remove espaços em branco no início e no fim.
    var nameValue = document.getElementById('name').value.trim();

    // Verifica se o campo está vazio.
    if (nameValue === '') {
        nameErrorMessage = 'Este campo é obrigatório.';
    }
    // Usa uma expressão regular (regex) para verificar se o nome contém apenas letras (incluindo acentuadas) e espaços.
    else if (!/^[a-zA-Z\u00C0-\u00FF ]+$/.test(nameValue)) {
        nameErrorMessage = 'O nome deve conter apenas letras.';
    }
    // Verifica se o nome excede 30 caracteres.
    else if (nameValue.length > 30) {
        nameErrorMessage = 'O nome deve ter no máximo 30 caracteres.';
    }
    // Verifica se o campo tem pelo menos um espaço, afim de obter o nome completo (nome e sobrenome).
    else if (nameValue.split(' ').length < 2) {
        nameErrorMessage = 'Por favor, insira seu nome completo.';
    }
    // Exibe a mensagem de erro (se houver) no elemento apropriado através do ID e retorna verdadeiro se não houver erros.
    document.getElementById('name-error-message').textContent = nameErrorMessage;
    return nameErrorMessage === '';
}

// Aplica as mesmas regras do Nome, porém, com o regex um pouco diferente de acordo com o email.
function validateEmail() {
    var emailErrorMessage = '';
    var emailValue = document.getElementById('email').value.trim();

    if (emailValue === '') {
        emailErrorMessage = 'Este campo é obrigatório.';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
        emailErrorMessage = 'Por favor, insira um endereço de e-mail válido.';
    }
    else if (emailValue.length > 100) {
        nameErrorMessage = 'O email deve ter no máximo 100 caracteres.';
    }

    document.getElementById('email-error-message').textContent = emailErrorMessage;
    return emailErrorMessage === '';
}

// Aplica regex diferenciados para a senha.
function validatePassword() {
    var passwordErrorMessage = '';
    var passwordValue = document.getElementById('password').value;

    if (passwordValue === '') {
        passwordErrorMessage = 'Este campo é obrigatório.';
        // Verifica se tem menos de 8 caracteres.
    } else if (passwordValue.length < 8) {
        passwordErrorMessage = 'A senha deve ter no mínimo 8 caracteres.';
    } else if (!/[A-Z]/.test(passwordValue)) {
        //Verifica se tem uma letra maiúscula.
        passwordErrorMessage = 'A senha deve conter pelo menos uma letra maiúscula.';
        //Verifica se tem uma letra minúscula.
    } else if (!/[a-z]/.test(passwordValue)) {
        passwordErrorMessage = 'A senha deve conter pelo menos uma letra minúscula.';
    } else if (!/[0-9]/.test(passwordValue)) {
        //Verifica se tem um número.
        passwordErrorMessage = 'A senha deve conter pelo menos um número.';
        //Verifica se tem um caracter especial.
    } else if (!/[!@#$%^&*(),.?":{}|<>]/.test(passwordValue)) {
        passwordErrorMessage = 'A senha deve conter pelo menos um caractere especial.';
    } else if (passwordValue.length > 100) {
        nameErrorMessage = 'A senha deve ter no máximo 100 caracteres.';
    }

    document.getElementById('password-error-message').textContent = passwordErrorMessage;
    return passwordErrorMessage === '';
}

function validateConfirmPassword() {
    var confirmPasswordErrorMessage = '';
    var confirmPasswordValue = document.getElementById('confirm_password').value;

    if (confirmPasswordValue === '') {
        confirmPasswordErrorMessage = 'Este campo é obrigatório.';
        // Verifica se a senha e a confirmação de senha são diferentes.
    } else if (confirmPasswordValue !== document.getElementById('password').value) {
        confirmPasswordErrorMessage = 'As senhas não coincidem.';
    }

    document.getElementById('confirm-password-error-message').textContent = confirmPasswordErrorMessage;
    return confirmPasswordErrorMessage === '';
}

// Adiciona um evento blur para cada campo
// O blur é ativado quando o campo perde o foco, ou seja, quando o usuário escrever algo e depois clicar fora ou ir para outro campo.
document.getElementById('name').addEventListener('blur', validateName);
document.getElementById('email').addEventListener('blur', validateEmail);
document.getElementById('password').addEventListener('blur', validatePassword);
document.getElementById('confirm_password').addEventListener('blur', validateConfirmPassword);

document.querySelector('.form-section').addEventListener('submit', function (event) {
    // Valida cada campo do formulário e armazena o resultado.
    var isNameValid = validateName();
    var isEmailValid = validateEmail();
    var isPasswordValid = validatePassword();
    var isConfirmPasswordValid = validateConfirmPassword();

    // Verifica se todos os campos são válidos.
    if (!isNameValid || !isEmailValid || !isPasswordValid || !isConfirmPasswordValid) {
        event.preventDefault(); // Impede o envio do formulário se a validação falhar.
    }
});