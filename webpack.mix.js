const mix = require('laravel-mix');
require('laravel-mix-pluton');

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

mix.pluton('wp-content/themes/portfolio/resources/js/parts')
    .js('wp-content/themes/portfolio/resources/js/app.js', 'wp-content/themes/portfolio/public/js')
    .sass('wp-content/themes/portfolio/resources/sass/theme.scss', 'wp-content/themes/portfolio/public/css')
    .browserSync({
        proxy: 'portfolio.localhost',
        notify: false
    });