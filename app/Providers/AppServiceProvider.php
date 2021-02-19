<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Blade;  

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // custom directives

        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->isAdmin == 1;
        // create admin directive  
        });

        Blade::if('member', function () {
            return auth()->check() && auth()->user()->isAdmin == 0;
        // create member directive  
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
