## Installation

Create DB Schema then add the DB Name and credentials to `.env`

``` bash
$ cp .env.example .env
$ php artisan key:generate
$ composer install
$ php artisan migrate --seed
```

## SMTP Configuration
I used mailtrap as the SMTP Provider. Kindly update the `MAIL_` part of the `.env` to your credentials.

## Queue
``` bash
$ php artisan queue:work
```

## Postman Collection

``https://documenter.getpostman.com/view/19162606/Uz5DpxKJ``
