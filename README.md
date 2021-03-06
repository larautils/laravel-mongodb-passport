LaraUtils MongoDB Passport
===============

A service provider to add support for [Laravel Passport](https://github.com/laravel/passport) and [MongoDB](https://github.com/jenssegers/laravel-mongodb).

Table of contents
-----------------
* [Installation](#installation)

Installation
------------

Installation using composer:

```sh
composer require larautils/mongodb-passport
```

You need to have your `App\User` class extend `LaraUtils\MongoDb\Passport\Models\User.php` instead of the default `Illuminate\Foundation\Auth\User`. This user class extends larvel-mongodb eloquent user as well as adding all the standard and required authentication and laravel passport traits.

```php
<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use LaraUtils\MongoDb\Passport\Models\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
}
```

### Laravel version Compatibility

 Laravel  | Package
:---------|:----------
 5.6.x    | 2.0.x

And add the service provider in `config/app.php`:

```php
LaraUtils\MongoDb\Passport\PassportServiceProvider::class,
```

The service provider will overide the default laravel passport models in order to use mongodb's implementation of eloquent. There is no need to register any additional classes or add any additional configuration other than those outlined in [Laravel Passport](https://github.com/laravel/passport) and [MongoDB](https://github.com/jenssegers/laravel-mongodb).
