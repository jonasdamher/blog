const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 
mix.sourceMaps().js('resources/js/web/*.js', 'public/js')
    .sass('resources/sass/main.scss', 'public/css');

mix.copyDirectory('resources/image/', 'public/image/')
    .copyDirectory('resources/fonts/', 'public/fonts/');