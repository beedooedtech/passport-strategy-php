<p align="center"><a href="https://beedoo.com.br/wp-content/uploads/2021/07/LOGO-BEEDOO-EDTECH-WHITE.png" width="400"></a></p>

<!-- <p align="center">
<a href="https://packagist.org/packages/beedooedtech/beedoo-sdk-php"><img src="https://img.shields.io/packagist/dt/beedooedtech/beedoo-sdk-php" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/beedooedtech/beedoo-sdk-php"><img src="https://img.shields.io/packagist/v/beedooedtech/beedoo-sdk-php" alt="Latest Stable Version"></a>
</p> -->

# Sobre Beedoo SDK

Autenticação simples e discreta para PHP 😉

Extremamente flexível e modular, o Passport pode ser inserido de forma discreta em qualquer aplicativo da web baseado no PHP Um conjunto abrangente de estratégias oferece suporte à autenticação usando um nome de usuário e senha, Google, Active Directory e muito mais.

# Índice

- [Instalação](#instalação)
- [Configuração](#configuração)

# Instalação

Instale a biblioteca utilizando o comando:

```shell
composer require beedooedtech/passport-php
```

## Configuração

Para incluir a biblioteca em seu projeto, basta fazer o seguinte:

```php
<?php

require __DIR__ . "/vendor/autoload.php"

$passport = new Passport\Passport();
```
