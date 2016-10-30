<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use View;
use App\Http\ViewComposers\TestViewComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       View::share('z', [1, 2, 3]);
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
