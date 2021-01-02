<?php

use App\Admin\Controllers\OrderController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    // $router->resource('products', ProductController::class);
    $router->resource('/products', ProductController::class)->except([]);
    // $router->post('/products', [App\Admin\Controllers\ProductController::class, 'storeProduct'])->name('products.store');
    $router->resource('categories', CategoryController::class)->except([]);

    $router->get('orders', [OrderController::class, 'index'])->name('orders.index');

    $router->get('orders/{id}', [OrderController::class, 'show'])->name('orders.detail');
});
