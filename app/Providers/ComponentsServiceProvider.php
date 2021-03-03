<?php

namespace App\Providers;

use App\View\Composers\MenuBlog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

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
        $this->renderComposers();
    }

    public function menuComponents () {
        Blade::componentNamespace('App\View\Components\Menu\Navbar', 'navbar');
        Blade::componentNamespace('App\View\Components\Blog', 'blog');
        Blade::componentNamespace('App\View\Components\Validation', 'validation');
    }

    public function renderComposers () {
        View::composer('components.app', MenuBlog::class);
    }
}
