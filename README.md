<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Requisitos para funcionamento do projeto
   - "php": "^8.0.2"
   - Extensões e módulos para php8.
   - Instação do laravel 9 e composer.

# Instalação (Comandos)
    - composer install
    - php artisan key:generate
    - Fazer as configurações do .env
    - php artisan migrate
    - php artisan db:seed --class=UserSeeder (Irá gerar um usuário padrão para testes)
    - php artisan serve (Irá subir o ambiente do seridor Laravel)
    
   
# Rotas de acesso 


```php
https://localhost:8000
```

Essa rota acessa o formulário de login

```php
https://localhost:8000/api/user/{id}   (Substituir {id} pelo id do usuário)
```

Retorno esperado em caso de sucesso.

```json
{
    "message": "Sucesso!",
    "data": {
        "email": "exampleTest@hotmail.com",
        "password": "123456789"
    }
}
```

# Recursos utilizados no sistema
    - Utilização de camada de Services para desacoplar regra de negócio do controller.
    - Utilização de userRequest para validação de campos da request.
    - Utilização de Middleware para autenticação do usuário.
