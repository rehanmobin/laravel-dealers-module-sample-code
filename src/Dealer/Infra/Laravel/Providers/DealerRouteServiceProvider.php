<?php

namespace Carnomaly\Dealer\Infra\Laravel\Providers;

use App\Providers\RouteServiceProvider;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

class DealerRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = 'Carnomaly\\Dealer\\UI\\Http';
    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(__DIR__. '/../routes/web.php');
        });
    }
}
