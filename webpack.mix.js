const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const rootPath = Mix.paths.root.bind(Mix.paths);
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
mix.postCss('resources/css/app.css',
    'public/css/main.css').purgeCss({
    content: [
        rootPath('resources/views/**/*.php'),
    ],
});

