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

mix
.js('resources/js/web/main.js', 'public/js/main.js')
.js('resources/js/web/sw.js', 'public/js/sw.js')
.js('resources/js/web/theme.js', 'public/js/theme.js')
.js('resources/js/blog/*.js', 'public/js/blog')
    .sass('resources/sass/web/main.scss', 'public/css/web/')
    .sass('resources/sass/web/page/blog/main.scss', 'public/css/web/page/blog.css')
    .sass('resources/sass/web/page/home/main.scss', 'public/css/web/page/home.css')
    .sass('resources/sass/web/page/new/main.scss', 'public/css/web/page/new.css')
    .sourceMaps(true, 'source-map').version();

mix.copyDirectory('resources/image/', 'public/image/')
    .copyDirectory('resources/fonts/', 'public/fonts/');