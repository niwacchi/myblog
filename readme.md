# Leaning, sample Laravel.
## Do after cloning
### Install composer
```sh
composer install
```
### Start server
```sh
php artisan server --host <IP Address> --port <Port No>
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
