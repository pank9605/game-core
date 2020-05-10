<?php

namespace App\Providers;
use App\Category;
use App\Clasification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(
            'layouts.app',
            function ($view) {
                $view->with('categories', Category::all());
                $view->with('clasifications', Clasification::all());
            }
            );
    }
}
