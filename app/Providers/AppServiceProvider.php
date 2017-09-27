<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        view()->composer('layouts.master', function($view){
            $view->with('blogs', \App\Workshop::all());
            $view->with('clubs', \App\Club::all());
        });

        view()->composer('layouts.enmaster', function($view){
            $view->with('blogs', \App\Workshop::all());
            $view->with('clubs', \App\Club::all());
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
