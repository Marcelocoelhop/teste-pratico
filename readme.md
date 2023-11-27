## Projeto

Este desafio foi desenvolvido com o intuído de mostrar as habilidades nas tecnologias requeridas no processo.

## Principais tecnologias utilizadas

- linguagens:
  - HTML
  - CSS
  - ReactJS
  - Next.js
  - PHP
- ferramentas:
  - Git
  - GitHub

## Instalação - Projeto

##### Requisitos:

- Faça [um fork](https://github.com/Marcelocoelhop/teste-pratico.git) desse repositório;
- Entre no seu perfil no GitHub e faça um clone do repositório que você fez um _fork_;
- Crie uma _branch_ com a sua alteração: `git checkout -b minha-alteracao`;
- Faça as alterações necessárias no código ou na documentação;
- Faça _commit_ das suas alterações: `git commit -m 'feat: Minha nova feature'`;
- Faça _push_ para a sua _branch_: `git push origin minha-alteracao`;
- Agora é só abrir a sua pull request no repositório que você fez o fork;

* **OBS: siga as instruções de cada teste prático**

## Requisitos: Teste Prático em HTML e PHP

● Acesse a pasta `html-php/` e altere uma página HTML chamada `formulario.html` que contenha um formulário com os seguintes campos:

- Nome (input tipo texto).
- Email (input tipo email).
- Senha (input tipo password).
- Botão de Envio (input tipo submit).

● Crie um arquivo PHP chamado `processa_formulario.php` para processar os dados do formulário:

- Recupere os dados enviados pelo formulário.
- Exiba uma mensagem na tela, mostrando o nome e o email recebidos.

● Adicione validação básica no lado do servidor:

- Recupere os dados enviados pelo formulário.
- Verifique se o campo do nome não está vazio.
- Verifique se o campo do email é um endereço de email válido.

● Exiba mensagens de erro adequadas caso a validação não seja bem-sucedida.

### Importante:

**Passo 1**: Baixar e Instalar o XAMPP

- Vá para o site oficial do XAMPP: https://www.apachefriends.org/index.html
- Escolha a versão apropriada para o seu sistema operacional (Windows, Linux, ou macOS).
- Faça o download do instalador e execute-o para iniciar o processo de instalação.
- Siga as instruções do instalador para concluir a instalação.

**Passo 2**: Iniciar o XAMPP

- Após a instalação, abra o XAMPP Control Panel.
- Inicie os módulos "Apache" e "MySQL" clicando nos botões "Start" ao lado de cada um.

**Passo 3**: Criar um Projeto

- Navegue até a pasta onde o XAMPP está instalado. No Windows, geralmente é `C:\xampp`; no Linux, pode ser `/opt/lampp`.
- Dentro dessa pasta, vá para `htdocs`. Este é o diretório onde você deve colocar sua pasta `html-php/` projeto, caso queira testar.

## Requisitos: Teste Prático em HTML e CSS

● Acesse a pasta `html-css/` e altere um arquivo HTML chamado `index.html` que tenha:

- Um cabeçalho `<h1>` com o texto "Minha Página Inicial".
- Uma lista ordenada com três itens listados.
- Um parágrafo que contenha um link para o Google (https://www.google.com).

● Estilize a página usando CSS:

- Acesse a pasta `styles/` e o arquivo `styles.css`.
- Defina uma cor de fundo para a página.
- Estilize o cabeçalho para ter uma cor de texto diferente e centralize-o na página.
- Faça os itens da lista terem uma cor de fundo alternada.
- Estilize o link para ter uma cor diferente quando não estiver sendo hoverado e outra cor quando estiver hoverado.

● Abra a página no navegador para verificar se a estrutura HTML está correta e se os estilos estão sendo aplicados corretamente.

## Requisitos: Teste Prático em Next.JS/React com Hooks:

Certifique-se de ter o Node.js com o comando no cmd ou powershell `node -v` instalado no seu sistema antes de começar. Caso não tenha, acesse o site (https://nodejs.org/en) para instalação.

● Acesse a pasta `next-react/` e rode o comando no seu cmd/powershell `npm install` para instalar as dependências necessárias para executar o projeto.
● Para executar o projeto, cole o comando no seu cmd/powershell `npm run dev`.

- Acesse o arquivo `pages/index.js` e altere o componente chamado `Contador`. Ao clicar no botão incrementar, o contador deve aumentar em 1 e ao clicar em decrementar deve subtrair em 1.
- Implemente um estado utilizando o Hook useState para rastrear o valor do contador.
- Exiba o valor do contador no componente.
- Teste se o componente renderiza corretamente e se o contador aumenta ao clicar no botão.

Powered by [SigmaCivil](https://sigmacivil.com.br).

Teste Finalizado - por Nilson Carvalho
