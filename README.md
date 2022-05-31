##Installation
``` bash
$ cp .env.example .env
$ php artisan key:generate
$ composer install
$ php artisan migrate --seed
```

##SMTP Configuration
I used mailtrap as the SMTP Provider. Kindly update the `MAIL_` part of the `.env` to your credentials.

##Queue
``` bash
$ php artisan queue:work
```

##Postman Collection
``https://app.getpostman.com/join-team?invite_code=b99cf0856b357c778790d42d8d7ddd1b&ws=0f0ec824-be57-4cdd-b42a-3edbe996a5f0``
