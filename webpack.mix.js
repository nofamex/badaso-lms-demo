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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

// Badaso
mix.js("package/badaso/core/src/resources/badaso/app.js", "public/js/badaso.js")
    .sass("package/badaso/core/src/resources/badaso/assets/scss/style.scss", "public/css/badaso.css")
    .vue()
