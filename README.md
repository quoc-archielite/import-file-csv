## Repaire development environment

## Setup

1. Composer install dependencies

PHP 8.1 or later
MySQL 8.0 or later

If use native environment:

```shell
composer install
```

If use docker environment:

```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

2. Create database

3. Copy `.env.example` to `.env`

```shell
cp .env.example .env
```

4. Update database connection and redis connection on `.env`

> If you use Docker, set `DATABASE_HOST=mysql` and `REDIS_HOST=redis`.
> In this step, you can update another configuration in dotenv file.

5. Setup Docker service first time (only Docker)

```shell
./vendor/bin/sail up -d
```

> TIP: you can set `sail` is alias of `./vendor/bin/sail` in `~/.zshrc` or `~/.bash_profile`.

6. Run database migrations and database seeding.

```shell
# on native environment
php artisan migrate
```
7. Run build file css and js

```shell
npm run dev
```
