<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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
        View::composer('layouts.app', function ($view){
            $view->with('navbar', 'components.navbar');
            $view->with('footer', 'components.footer');
            $view->with('kelas', 'components.kelas');
            $view->with('trending', 'components.trending');
            $view->with('terbaru', 'components.terbaru');
            $view->with('benefit', 'components.benefit');
        });
    }
}
