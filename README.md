<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Запуск с помощью Laravel Sail
```shell
# Клонирование проекта
mkdir registration-api
cd registration-api

git init
git remote add origin https://github.com/eldargasanov1/registration-api.git
git pull origin main

# Установка и запуск Laravel Sail
composer require laravel/sail --dev
cp .env.example .env
php artisan sail:install -> Enter
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate

# Приложение запущено по адресу http://127.0.0.1/

# Готово!
```
## Routes
Перед выполнением запроса на получение профиля пользователя необходимо в **_headers_** указать полученный **_токен авторизации_**, полученный после регистрации пользователя.
<br>
Все запросы выполнялись в Postman.
### Создание пользователя:
```ts
interface User {
    email: string,
    password: number,
    gender: 'male'|'female'
}
const user: User = {
    email: 'email@example.com',
    password: 'password123',
    gender: 'female'
};

async function registerUser() {
    const request = new Request("/api/registration", {
        method: "POST",
        headers: {
            "Authorization": "Bearer <token>"
        },
        body: JSON.stringify(order)
    });

    const response = await fetch(request);
    const result = await response.json()
    console.log(result);
}
```
### Просмотр профиля:
```ts
async function getProfile() {
    const request = new Request("/api/profile", {
        method: "GET",
        headers: {
            "Authorization": "Bearer <token>"
        },
    });

    const response = await fetch(request);
    const result = await response.json()
    console.log(result);
}
```
