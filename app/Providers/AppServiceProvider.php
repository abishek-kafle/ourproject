<?php

namespace App\Providers;

use App\Models\SiteSettings;
use App\Models\Social;
use App\Models\Theme;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['front.*'], function($view){
            $view->with('theme', Theme::first());
        });

        View::composer(['front.*'], function($view){
            $view->with('setting', SiteSettings::first());
        });

        View::composer(['front.*'], function($view){
            $view->with('social', Social::first());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
