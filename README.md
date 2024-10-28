
# 📋 Projeto de Cadastro de Usuário

Este é um projeto simples de sistema de cadastro de usuários, desenvolvido com HTML, CSS e PHP. Ele inclui páginas de registro e confirmação, com um estilo responsivo e moderno. 🎨

## 📂 Estrutura do Projeto

- **📄 register.html**: Página de registro onde o usuário insere seu nome, e-mail e senha.
- **🎉 success.html**: Página de sucesso, exibida após o cadastro bem-sucedido.
- **🎨 styles.css**: Estilos para as páginas, incluindo design responsivo e animações.
- **📜 scripts/register.php**: Script PHP que processa o cadastro do usuário. *(Este arquivo precisa ser criado ou configurado para salvar os dados no banco de dados.)*
- **🔒 logout.php**: Script para encerrar a sessão do usuário.
- **👥 view_users.php**: Página para visualizar os usuários cadastrados.
- **👋 welcome.php**: Página de boas-vindas ao usuário logado.

## 🚀 Pré-requisitos

- Servidor web com suporte a PHP (ex.: Apache, Nginx).
- Banco de dados SQL (opcional, dependendo da implementação do `register.php`).
- Opcionalmente, o uso do [Composer](https://getcomposer.org/) para gerenciamento de dependências, se forem necessários pacotes adicionais de PHP.

## ⚙️ Como Configurar

1. **Clonar o repositório**:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   cd nome-do-repositorio
   ```

2. **Configurar o Servidor Local**:
   - Coloque os arquivos em um diretório acessível pelo servidor local, como `htdocs` no XAMPP.

3. **Configurar o Banco de Dados**:
   - Se necessário, crie um banco de dados e uma tabela para armazenar os dados do usuário.
   - Exemplo de tabela SQL:
     ```sql
     CREATE TABLE usuarios (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL,
         email VARCHAR(100) NOT NULL,
         password VARCHAR(255) NOT NULL
     );
     ```

4. **Configurar o `register.php`**:
   - Implemente a lógica de inserção dos dados no banco de dados no arquivo `register.php`.

## 💻 Como Usar

1. Acesse a página de registro `register.html` no navegador.
2. Preencha os campos e envie o formulário.
3. Após o registro bem-sucedido, você será redirecionado para `success.html`. ✅
4. Utilize `view_users.php` para visualizar os usuários cadastrados.

## 🎨 Estilos e Funcionalidades

- **Estilos CSS**: O `styles.css` adiciona um visual moderno, com sombras, efeitos de transição, responsividade, e um plano de fundo com efeito de desfoque.
- **Responsividade**: A interface é responsiva e ajusta-se bem em dispositivos móveis e desktops.
- **Animações**: A página utiliza uma animação suave de opacidade ao carregar.

## 📄 Licença

Este projeto é de código aberto e está licenciado sob a licença MIT.

---

Se precisar de ajuda adicional, estou aqui para ajudar! ✨
