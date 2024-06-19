# 🚀 TOOLZZ-API

<p>
  <img alt="Version" src="https://img.shields.io/badge/php-^8.1-blue.svg?cacheSeconds=2592000" />
  <img alt="Version" src="https://img.shields.io/badge/laravel-^10.10-red.svg?cacheSeconds=2592000" />
  <a href="https://documenter.getpostman.com/view/13040502/UzBjrney#c3212110-5be6-45bd-b000-95c6538746ca" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
  <a href="#" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-yellow.svg" />
  </a>
</p>

> Teste prático com o objetivo de avaliar a capacidade técnica de desenvolvimento de uma API RESTful utilizando o framework Laravel. O desafio consiste em desenvolver uma API RESTful basica com autenticação JWT.

## Instalação

1- Clone o repositório

```sh
git clone https://github.com/edvaldotorres/toolzz-api.git
```

2- Acesse a pasta do projeto

```sh
cd toolzz-api
```

3- Execute o script para instalar as dependências com docker

```sh
sh script-start-docker-compose.sh
```

Obs: Isso pode demorar um pouco, pois o docker irá baixar as imagens necessárias para rodar o projeto.

4- Instale as dependências do projeto

```sh
docker-compose exec php composer install
```

```sh
docker-compose exec php php artisan key:generate
```

5- Rodar as migrações

```sh
docker-compose exec php php artisan migrate
```

6- Rodar seeders

```sh
docker-compose exec php php artisan db:seed
```

## Documentação da API

#### Autenticação

- [POST] /api/v1/login

Autentica o usuário e retorna o token JWT.

Parametros de entrada:

```json
{
  "email": "admin@toolzz.com",
  "password": "password"
}
```

Resposta de sucesso:

```json
{
  "access_token": "token_jwt",
  "token_type": "bearer",
  "expires_in": 3600
}
```

#### Usuários

- [GET] /api/v1/me

Retorna as informações do usuário autenticado. É necessário passar o token JWT no cabeçalho da requisição.

Cabecalho da requisição:

```json
{
  "Authorization": "Bearer {token_jwt}"
}
```

Resposta de sucesso:

```json
{
  "id": 1,
  "name": "Test User",
  "email": "admin@toolzz.com",
  "email_verified_at": "2024-06-19T20:55:28.000000Z",
  "created_at": "2024-06-19T20:55:28.000000Z",
  "updated_at": "2024-06-19T20:55:28.000000Z"
}
```

## Autor

👤 **Edvaldo Torres de Souza**

- Website: [edvaldotorres.com.br](https://edvaldotorres.com.br/)
- Github: [@edvaldotorres](https://github.com/edvaldotorres)
- LinkedIn: [Edvaldo Torres](https://www.linkedin.com/in/edvaldo-torres-189894150/)
