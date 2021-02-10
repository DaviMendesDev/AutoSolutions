# AutoSolutions
An auto parts marketplace website

# Installation

## Step 1
To install this project you must create a database named `autoparts_market` on MySQL.

## Step 2
After that you must install all dependencies of the project with `composer install` command.

## Step 3
So you will need to migrate the database with `php artisan migrate` command

## Step 4
And finally you need to use `php artisan db:seed` command to seed all data on database

# The ```Env``` file
the env file must looks like this:

```
APP_NAME="Auto Parts Market"
APP_ENV=local
APP_KEY=base64:YtkwkORXZjwAhd9B2uCvy7GCijymfOuhJtjW/3h51U8=
APP_DEBUG=true
APP_URL=http://autoparts-market.test

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=autoparts_market
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=<your credential>
MAIL_PASSWORD=<your credential>
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=<your credential>
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

# 
