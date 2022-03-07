// const { extract } = require("laravel-mix");
const mix = require("laravel-mix");
require("vuetifyjs-mix-extension");

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

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [
        //
    ]
);

// Badaso
mix.js("package/badaso/core/src/resources/badaso/app.js", "public/js/badaso.js")
    .sass(
        "package/badaso/core/src/resources/badaso/assets/scss/style.scss",
        "public/css/badaso.css"
    )
    .vue();

// Badaso LMS Theme
mix.js(
    "package/badaso/badaso-lms-theme/src/resources/app/app.js",
    "public/js/lms-theme.js"
)
    .vuetify("vuetify-loader", { postCss: true })
    .postCss(
        "package/badaso/badaso-lms-theme/src/resources/css/app.css",
        "public/css/lms-theme.css",
        [require("tailwindcss")]
    )
    .vue();
