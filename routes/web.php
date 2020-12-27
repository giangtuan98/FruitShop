<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'getCheckout'])->name('checkout');
Route::post('/checkout', [HomeController::class, 'checkout']);
Route::get('/test', [HomeController::class, 'testEmail']);
Route::post('api/add-to-cart', [CartController::class, 'addToCart']);
Route::post('api/update-cart', [CartController::class, 'updateCart'])->name('update-cart');
Route::post('api/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove-item');
Route::post('api/sub-quantity', [CartController::class, 'subQuantity'])->name('sub-quantity');
