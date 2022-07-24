<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Demo blog</h1>
    <br>
</p>

DESCRIPTION
------------

Yii2 based demo blog. Dockerized and can be simply run using Installation instructions below. Database included.

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------


### Install with Docker

Update your vendor packages

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Start the container

    docker-compose up -d

### Create tables

Run migrations

    docker exec -it yii2-php-1 php yii migrate

### Finally
    
You can then access the application through the following URL:

    http://127.0.0.1

Create user using signup link


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=db;dbname=yii2',
    'username' => 'my_user_name',
    'password' => 'my_user_password',
    'charset' => 'utf8',
];
```
