<?php

namespace App\Providers;

use App\Item;
use App\Todo;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        if(auth()->user()) {
//            View::composer('master', function ($view) {
//                $view->with('todoCount', '(' . auth()->user()->todos->count() . ')');
//            });
//        }
        View::composer('master', function ($view) {
            $view->with('todoCount', Todo::get()->count());
        });
    }
}
