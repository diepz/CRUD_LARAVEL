## Các bước khởi chạy
### Install composer
```composer install```
### ENV
``` cp env.example .env ```
### Tạo key
```php artisan key:generate```
### clone
``` git clone https://github.com/Laradock/laradock.git ```
### Vào laradock
``` cp cp env-example .env ```
### Setup file ENV trong laradock
``` MYSQL_VERSION=5.7
MYSQL_DATABASE=laradock
MYSQL_USER=root
MYSQL_PASSWORD=root
MYSQL_PORT=3308
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d
```
### Setup file ENV 
```

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laradock
DB_USERNAME=root
DB_PASSWORD=root

```
