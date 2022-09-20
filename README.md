# Simple Url Shortener
This is simple URL shortener, built on PHP, and Laravel.
Short URLs are generated from database ID keys, using base62 encoding.

## Installation
You need PHP, composer, Laravel, and one of SQL server (MySQL, for example) to be installed on your OS.
Download, or clone with git.
```bash
git clone https://github.com/aldis-sarja/simple-url-shortener.git
cd simple-url-shortener
composer install
```

Copy the file `.env.example` to `.env`:
```bash
cp .env.example .env
```

Configure your SQL server in `.env` file:
```bash
DB_CONNECTION=<your-db-server>
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<shortened-URLs-db-name>
DB_USERNAME=<your-db-user-name>
DB_PASSWORD=<your-password>
```

Now create database tables in project:
```bash
php artisan migrate
```

Later you can clear database with command
```bash
php artisan migrate:fresh
```

## Usage
In the terminal run:
```bash
php artisan serve
```

Query for short url:
`POST: <your-host-address>/api/create?q=<original-url>`

Query for original url:
`GET: <your-host-address>/api/get?q=<short-url>`


## Conclusions
A better approach would be using a database server with data distribution.
MongoDB could be used for this task with his database sharding.
Every shard (database fragment) would represent a table with a particular range of ID keys (10M, say).
This would allow the distribution of the load for generating ID keys.

Sadly I didn't have time to learn enough about MongoDB and encountered problems while trying to configure MongoDB for Laravel.
