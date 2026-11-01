# PES Online League

The public site and the start of a user area for an online tournament platform built around the game Pro Evolution Soccer 2015, written in PHP + MySQL. The platform appears in the code as "Liga Online".

Context: freelance project, 2015. Author: Nícollas Frazão. The interface is in Brazilian Portuguese.

## What it does

The code covers accounts, friends and chat. The tournament features the site advertises are not implemented in this repository.

- **Landing page** (`index.php`): full-screen image slideshow, a contact section, a contact form (layout only, with no handler), and the sign-up and login panels.
- **Sign-up**: full name, nickname, birth date, phone, CPF, sex, email, password with confirmation, and a terms checkbox, validated and masked on the client (`script/Cadastro - Validação.js`) and saved by `php/Cadastrar.php`.
- **Login** by nickname and password, with a "keep me signed in" option that stores the nickname and password in a cookie for one day and logs in again from it.
- **User area** (`HomeUser.php`):
  - friends list with an online/offline indicator and an online/total counter;
  - one chat window per friend; messages are sent base64-encoded to `php/EnviarMensagemChat.php`, and the open windows are refreshed every 15 seconds through `php/AtualizarChats.php`;
  - "My accounts" panel (`inicial.php`) that lists the gaming platforms and the user's nickname on each, plus PSN and Xbox Live input boxes that are not connected to any endpoint yet;
  - logout, which marks the user offline.
- **Presence sweep** (`php/ManterLogado.php`): refreshes the caller's last activity and marks every user offline after 10 minutes without activity.

Requests are posted to hidden iframes, and the PHP responses are `<script>` blocks that update the parent page.

## Tech stack

- PHP 5 with the old `mysql_*` extension (removed in PHP 7)
- MySQL
- HTML, CSS and JavaScript written by hand, jQuery 1.11.2, and the php.js `base64_encode`/`base64_decode` functions (`script/Criptografia.js`)

## Running locally

The database schema and data are not included. `banco/` holds a scratch file of SQL written during development (partial DDL and test queries); it is not a complete schema.

1. Use PHP 5.6 (or older 5.x) with the `mysql` extension and a MySQL server.
2. Create the database and the tables the code expects:
   - `tb_usuario` (`cd_usuario`, `nm_usuario`, `nm_nickname`, `cd_telefone`, `dt_datanas`, `nm_sexo`, `cd_cpf`, `nm_email`, `cd_senha`, `dt_cadastro`, `ic_tipo`, `ic_confirmado`, `ic_logado`, `dt_ultima_atividade`)
   - `usuario_amigo` (`cd_usuario`, `cd_amigo`, `dt_amizade`, `cd_amizade`)
   - `tb_mensagem` (`cd_mensagem`, `nm_mensagem`, `dt_mensagem`, `cd_usuario`, `cd_amigo`)
   - `tb_plataforma` (`cd_plataforma`, `nm_plataforma`)
   - `usuario_plataforma` (`cd_usuario`, `cd_plataforma`, `nm_nickname`)
3. Set the connection values in `php/Conexao.php` (the committed credentials are placeholders).
4. Serve the folder, for example `php -S localhost:8000`, and open `index.php`.

Friendships have no screen; rows in `usuario_amigo` are inserted by hand.

## Project structure

```
index.php                Landing page, sign-up and login
HomeUser.php             User area: friends list, chat windows, top menu
inicial.php              "My accounts" panel loaded inside the user area
php/                     Endpoints: Cadastrar, Login, Logout, chat, presence
script/                  Sign-up validation, base64 helpers, jQuery
imagens/                 Icons, a neutral logo and a neutral avatar
banco/                   Development SQL notes
*.html                   Static mock-ups of the pages, kept from the design phase
```

## Notes

This is early legacy code, kept as a portfolio sample:

- SQL is built by string concatenation with unescaped request values.
- Passwords are base64-encoded, not hashed, and the "keep me signed in" cookie carries the encoded password.
- The PHP code depends on the `mysql_*` extension and does not run on PHP 7 or later without changes.
- The heartbeat in `HomeUser.php` assigns `src` to the `ManterLogado` function instead of an iframe, so the page never calls `php/ManterLogado.php`.
- The profile panel in `inicial.php` still shows hard-coded sample data instead of the logged-in user's record.
- The menu entries Settings, Accounts and Help have no action.
- Third-party images (game screenshots, player photos, a club crest and wallpapers) and the original logo were removed, so the slideshow and some image slots render empty.
- There are no automated tests.
