# Leaning, sample Laravel.
## Do after cloning
### Install composer
```sh
composer install
```
### Create database
- create database file.
```sh
touch database/database.sqlite
```
- setting .env to use sqlite.
- do migration.
```sh
php artisan migrate
```
### Create Application key
```sh
php artisan key:generate
```
### Start server
```sh
php artisan serve --host <IP Address> --port <Port No>
```
