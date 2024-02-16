<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
                // Directive @admin
                Blade::if('admin', function () {
                    return auth()->check() && auth()->user()->role === 'admin';
                });
        
                // Directive @chercheur
                Blade::if('chercheur', function () {
                    return auth()->check() && auth()->user()->role === 'chercheur';
                });
        
                // Directive @entreprise
                Blade::if('entreprise', function () {
                    return auth()->check() && auth()->user()->role === 'entreprise';
                });
    }
}
