<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('app', \App\View\Components\App::class);
        $this->menuComponents();
    }

    public function menuComponents () {
        Blade::componentNamespace('App\View\Components\Menu\Navbar', 'navbar');
    }
}
