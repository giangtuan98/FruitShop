const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/Template/shop/css', 'public/css')
.copy('resources/Template/shop/js', 'public/js')
.copy('resources/Template/shop/fonts', 'public/fonts')
.copy('resources/Template/shop/img', 'public/img');

mix.copy('resources/css/notify.css', 'public/css/notify.css')
.copy('resources/css/prettify.css', 'public/css/prettify.css')
.copy('resources/js/notify.js', 'public/js/notify.js')
.copy('resources/js/prettify.js', 'public/js/prettify.js');
