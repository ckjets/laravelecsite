<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use Illuminate\Support\Facades\Schema;

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
        // 本番環境(Heroku)でhttpsを強制する
        if (\App::environment('production')) {
            \URL::forceScheme('https');
            }
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
