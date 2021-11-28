<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instala��o

Para facilitar a configura��o do Docker no projeto, utilizei o ambiente do Laradock, onde facilita a configura��o do banco e dos containers.

1� Passo - Entrar na pasta do Laradock

```bash
cd laradock
```

2� Passo - Dentro da pasta do Laradock:
Subir os containers do Docker

```bash
docker-compose up -d nginx mysql phpmyadmin
docker-compose exec --user=laradock workspace bash
```

3� Passo - Executar as migrations do banco de dados

```bash
php artisan migrate
``` 

URL - Para testes

```bash
http://localhost:8888/api/cliente
http://localhost:8888/api/consulta/final-placa/{numeroFinalDaPlaca}
``` 