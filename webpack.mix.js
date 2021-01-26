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

const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/assets/js/')
    .sass('resources/sass/app.scss', 'public/assets/css/')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
    mix.version();
}
