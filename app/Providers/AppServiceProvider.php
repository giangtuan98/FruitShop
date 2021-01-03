<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Observers\ProductObserver;
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
        View::composer('layouts.category-nav', function ($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });

        $cart = session('cart');

        View::share('cart', $cart);

        Product::observe(ProductObserver::class);
    }
}
