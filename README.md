# MailCentral

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-blueviolet.svg)](https://livewire.laravel.com/)

O MailCentral é um projeto Laravel 10 desenvolvido com o propósito de centralizar todas as caixas de entrada de e-mails de um usuário. Esta aplicação foi criada como parte de um estudo aprofundado sobre os protocolos IMAP e SMTP.

## Instalação

1. Clone o projeto.
2. Na pasta do projeto, copie o arquivo `.env.example` para `.env`.
3. Gere a chave de aplicação.
4. Navegue até o diretório do projeto e instale as dependências

```bash
composer install
```

5. Suba os containers 

```bash
./vendor/bin/sail up -d
```

6. Execute as migrações do banco de dados.
7. Acesse a aplicação em [http://localhost](http://localhost).

## Funcionalidades Principais

- **Cadastrar e Configurar Contas de E-mail:** :hourglass: Os usuários podem cadastrar e configurar suas contas de e-mail facilmente. O MailCentral suporta várias contas, permitindo aos usuários consolidar todas as suas caixas de entrada em um só lugar.

- **Visualizar Caixa de Entrada com E-mails Lidos e Não Lidos:** :hourglass: A interface do MailCentral proporciona uma visualização clara e organizada da caixa de entrada, distinguindo e-mails lidos daqueles que ainda não foram lidos.

- **Envio de uma Resposta de E-mail:** :hourglass: O MailCentral permite que os usuários respondam rapidamente aos e-mails diretamente através da aplicação.

## Requisitos

- Docker

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue para reportar bugs, sugerir melhorias ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).