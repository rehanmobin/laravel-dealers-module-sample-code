<?php

namespace Carnomaly\Dealer\Infra\Laravel\Providers;

use Carbon\Laravel\ServiceProvider;
use Carnomaly\Dealer\Domain\Dealer;

class DealerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // auth configs
        $authProviders = config('auth.providers');
        config(['auth.providers' => \array_merge($authProviders, [
            'dealers' => ['driver' => 'eloquent', 'model' => Dealer::class]
        ])]);
        $authGuards = config('auth.guards');
        config(['auth.guards' => \array_merge($authGuards, [
            'dealers' => ['driver' => 'session', 'provider' => 'dealers']
        ])]);



        //dd([database_path('migrations'), __DIR__. '/../migrations']);
        $this->loadMigrationsFrom([database_path('migrations'), __DIR__. '/../migrations']);

        $this->loadViewsFrom(__DIR__. '/../views', 'dealer');
    }
}
