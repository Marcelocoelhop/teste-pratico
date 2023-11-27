document.addEventListener('DOMContentLoaded', function () {
    var passwordInput = document.getElementById('password');
    var eyeIcon = document.querySelector('.eye-password');
    var eyeSlashIcon = document.querySelector('.eye-slash-password');

    // Inicialmente, oculta o ícone de olho
    eyeIcon.style.display = 'none';

    // Evento de clique para o ícone de olho cortado
    eyeSlashIcon.addEventListener('click', function () {
        passwordInput.type = 'text';
        eyeSlashIcon.style.display = 'none';
        eyeIcon.style.display = 'block';
    });

    // Evento de clique para o ícone de olho
    eyeIcon.addEventListener('click', function () {
        passwordInput.type = 'password';
        eyeIcon.style.display = 'none';
        eyeSlashIcon.style.display = 'block';
    });


    // Adiciona as mesmas funcionalidades para a confirmação de senha.
    var confirmPasswordInput = document.getElementById('confirm_password');
    var confirmEyeIcon = document.querySelector('.eye-confirm-password');
    var confirmEyeSlashIcon = document.querySelector('.eye-slash-confirm-password');

    confirmEyeIcon.style.display = 'none';

    confirmEyeSlashIcon.addEventListener('click', function () {
        confirmPasswordInput.type = 'text';
        confirmEyeSlashIcon.style.display = 'none';
        confirmEyeIcon.style.display = 'block';
    });

    confirmEyeIcon.addEventListener('click', function () {
        confirmPasswordInput.type = 'password';
        confirmEyeIcon.style.display = 'none';
        confirmEyeSlashIcon.style.display = 'block';
    });
});
