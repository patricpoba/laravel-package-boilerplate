<?php

namespace Qodehub\TicketingApp;

use Illuminate\Support\ServiceProvider;

class TicketingAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */ 
        $this->registerResources();

        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
            $this->registerPublishing();   
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'qh-support-tickets');

         
        // Register the main class to use with the facade
        $this->app->singleton('qh-support-ticketing-app', function () {
            return new TicketingApp;
        });
    }


    protected function registerRoutes()
    {
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        \Route::group([ 
            'as'        => 'qh-support-ticket-system',
            'namespace' => 'Qodehub\TicketingApp\Http\Controllers', 
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        }); 
    }

    protected function registerResources()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'reports');
        
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'qh-tickets');
        
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
 
        

    protected function registerPublishing()
    {
        // Automatically apply the package configuration
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('qh-support-tickets.php'),
        ], 'config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/reports'),
        ], 'views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/reports'),
        ], 'assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/reports'),
        ], 'lang');*/

        // Registering package commands.
        // $this->commands([]);

    }

}
