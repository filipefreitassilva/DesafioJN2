<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalação

Para facilitar a configuração do Docker no projeto, utilizei o ambiente do Laradock, onde facilita a configuração do banco e dos containers.

1º Passo - Clonar o ambiente do laradock na raiz do projeto

```bash
git clone https://github.com/Laradock/laradock.git
```

2º Passo - Copiar o arquivo ".env.laradock" da raiz para a pasta do Laradock

```bash
renomear de ".env.laradock" para ".env"
```

3º Passo - Entrar na pasta do Laradock

```bash
cd laradock
```

4º Passo - Dentro da pasta do Laradock:
Subir os containers do Docker

```bash
docker-compose up -d nginx mysql phpmyadmin workspace
docker-compose exec --user=laradock workspace bash
```

5º Passo - Executar as migrations do banco de dados

```bash
php artisan migrate
``` 

URL - Para testes

```bash
http://localhost:8888/api/cliente
http://localhost:8888/api/consulta/final-placa/{numeroFinalDaPlaca}
``` 
