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
    // JS WEB
    .js('resources/js/web/main.js', 'public/js/web')
    .js('resources/js/web/sw.js', 'public/js/web')
    .js('resources/js/web/theme.js', 'public/js/web')
    .js('resources/js/web/blog/*.js', 'public/js/web/blog')
    // JS PANEL
    .copy('resources/js/panel/menu.js', 'public/js/panel')
    // JS COMMON
    .copy('resources/js/common/jquery.v3.6.0.min.js', 'public/js/common')
     .copy('resources/js/common/bootstrap.bundle.min.js', 'public/js/common')
    // CSS WEB
    .sass('resources/sass/web/main.scss', 'public/css/web/')
    .sass('resources/sass/web/page/blog/main.scss', 'public/css/web/page/blog.css')
    .sass('resources/sass/web/page/home/main.scss', 'public/css/web/page/home.css')
    .sass('resources/sass/web/page/new/main.scss', 'public/css/web/page/new.css')
    .sass('resources/sass/web/page/login/main.scss', 'public/css/web/page/login.css')
    // CSS PANEL
    .sass('resources/sass/panel/dashboard.scss', 'public/css/panel')
    .css('resources/sass/panel/bootstrap.min.css', 'public/css/panel')

    .sourceMaps(true, 'source-map').version();

mix.copyDirectory('resources/image/', 'public/image/')
    .copyDirectory('resources/fonts/', 'public/fonts/');