<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.header.header', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });

        view()->composer('layouts.footer.footer', function ($view) {
            $view->with('current_locale', app()->getLocale());
        });

        view()->composer('welcome', function ($view) {
            $view->with('current_locale', app()->getLocale());
        });

        view()->composer('contact', function ($view) {
            $view->with('current_locale', app()->getLocale());
        });

        

    }
}
