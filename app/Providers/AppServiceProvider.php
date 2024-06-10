<?php

namespace App\Providers;

use App\Providers\Service\SantriService;
use App\Providers\RouteParamService;
use App\Providers\Service\IndoRegionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(SantriService::class, function($app){
            return new SantriService($app);
        });
        $this->app->singleton(RouteParamService::class, function($app){
            return new RouteParamService($app);
        });
        $this->app->singleton(IndoRegionService::class, function($app){
            return new IndoRegionService($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
