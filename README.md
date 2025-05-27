<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- Simple, fast routing engine
- Powerful dependency injection container
- Multiple backends for session and cache storage
- Expressive database ORM (Eloquent)
- Robust queue and job system
- Integrated authentication and authorization

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/seu-projeto.git
    cd seu-projeto
    ```

2. Instale as dependências:
    ```bash
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env`:
    ```bash
    cp .env.example .env
    ```

4. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

5. Configure as variáveis de ambiente no arquivo `.env`, especialmente as configurações do banco de dados.

6. Execute as migrations e os seeders:
    ```bash
    php artisan migrate --seed
    ```

## Filament e Fabricator

Este projeto utiliza o [Filament](https://filamentphp.com/) como painel administrativo e o plugin [Fabricator](https://filamentphp.com/plugins/fabricator) para geração de recursos.

Após instalar as dependências, publique os assets do Filament e do Fabricator se necessário:
```bash
php artisan filament:install
php artisan vendor:publish --tag="filament-fabricator-config"
```

Consulte a documentação oficial do Filament e do Fabricator para mais detalhes de configuração e uso.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
