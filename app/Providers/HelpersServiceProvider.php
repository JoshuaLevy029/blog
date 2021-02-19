<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $assets = app_path('Helpers/Assets.php');
        if(file_exists($assets)) {
            require_once ($assets);
        }
        $paths = app_path('Helpers/Paths.php');
        if(file_exists($paths)) {
            require_once ($paths);
        }
        $requests = app_path('Helpers/Requests.php');
        if(file_exists($requests)) {
            require_once ($requests);
        }
        $strings = app_path('Helpers/Strings.php');
        if(file_exists($strings)) {
            require_once ($strings);
        }
        $environments = app_path('Helpers/Environment.php');
        if(file_exists($environments)) {
            require_once ($environments);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
