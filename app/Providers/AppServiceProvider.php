<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\SubCategory;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('frontend.includes.homeheader', function($view){
          $view->with('categories', Category::all()->load('subCategory'));
        });

        view::composer('frontend.includes.header', function($view){
          $view->with('categories', Category::all()->load('subCategory'));
        });
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
