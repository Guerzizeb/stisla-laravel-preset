<?php

namespace Guerzizeb\LaravelPreset\Stisla;

use Guerzizeb\LaravelPreset\Stisla\StislaAuth;
use Guerzizeb\LaravelPreset\Stisla\StislaErrors;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class StislaPresetServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('stisla', function ($command) {
            StislaPreset::install();
            
            $command->info('Stisla scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
            
            // exec("npm install --no-bin-links");
            // exec("npm run production");

            //$command->info('Stisla installed');

            if ($command->option('auth')) {
                $command->call('stisla:auth');
            }
        });

        $this->bootBladeComponents();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([ 
                StislaAuth::class,            
            ]);
        }
    }

    /**
     * Bootstrap all blade custom components.
     *
     * @return void
     */
    public function bootBladeComponents()
    {
        Blade::component('components.alert', 'portal_alert');
        // TODO: Include third party modules
        //Blade::component('components.toast', 'portal_toast');
    }
}
