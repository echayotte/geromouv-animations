<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {
        //──── when on mac use this ──────────────────────────────────────────
        // Schema::defaultStringLenth(191);

        //──── see SQL from $queries ─────────────────────────────────────────
        // \Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
        //     dump([ $query->sql]);
        // });
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
