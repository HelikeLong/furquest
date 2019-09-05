# FurQuest - Admin and API
This is the administrative panel and API service for the app FurQuest

The application is built in **Laravel 5.8** with **MySQL** 

## Minimum Requirements
* PHP 7.0 ou superior
* MySql 5.6 ou superior
* [Node.js](https://nodejs.org/en/)
* [NPM](https://www.npmjs.com/)
* Extension PHP OpenSSL
* Extension PHP PDO
* Extension PHP Mbstring
* Extension PHP Tokenizer
* Extension PHP XML
* Extension PHP Ctype
* Extension PHP JSON
* Web Service (Apache, Nginx etc)

### Ambient configuration
Requirements:
- Web Service (Apache, Nginx etc)

Clone the repository to the desired location.

Proper install the choosen webserver, then edit your `/etc/hosts` file and add:
```
127.0.0.1   furquest.lh
```

Configure a [Virtual Host](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-16-04#step-four-—-create-new-virtual-host-files) with the name `furquest.lh` 
```xml
# This is only appliable to Apache configuration

<VirtualHost *:80>
    ServerName furquest.lh
    DocumentRoot /var/www/furquest/public

    <Directory /var/www/furquest/public/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog /var/log/apache2/furquest-error.log
    CustomLog /var/log/apache2/furquest-custom.log combined
</VirtualHost>
```

### Project Setup
#### Run NPM:
```bash
npm install
```
You might need to use `sudo`

#### Run Composer:
```bash
php bin\composer.phar install
```

#### Configure the .env
```bash
cp .env.example .env
```
Open the file and configure `APP_URL` and `DB_`  keys

#### Laravel instalation
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan passport:install
composer dump-autoload
```

#### Passport Token Secret
The `passport:install` command will generate two client keys, you gonna use the secound one, `password`, get the generated token and place it inside `.env` at the `OAUTH_TOKEN_CLIENT_SECRET` key.
