<?php

namespace Vinyl\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(VIewFactory $view)
    {
        $view->composer('partials.forms.cat', 'App\Http\Views\Composers\CatFormComposer');
        //$view->composer('partials.forms.band', 'App\Http\Views\Composers\CatFormComposer');

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
