<?php namespace LaraUtils\MongoDb\Passport;

use Illuminate\Support\ServiceProvider;
use LaraUtils\MongoDb\Passport\Models\Token;
use LaraUtils\MongoDb\Passport\Models\Client;
use LaraUtils\MongoDb\Passport\Models\AuthCode;
use LaraUtils\MongoDb\Passport\Models\PersonalAccessClient;

class PassportServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->alias('Laravel\Passport\Token', Token::class);
        $this->app->alias('Laravel\Passport\Client', Client::class);
        $this->app->alias('Laravel\Passport\AuthCode', AuthCode::class);
        $this->app->alias('Laravel\Passport\PersonalAccessClient', PersonalAccessClient::class);
    }
}
