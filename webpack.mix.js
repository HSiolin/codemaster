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
// js('resources/js/app.js', 'public/js')
//.postCss('resources/css/app.css', 'public/css', [
//
//]) 
mix.scripts('node_modules/jquery/dist/jquery.js', 'public/template_2/assets/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/template_2/assets/js/bootstrap.bundle.js')
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/template_2/assets/css/bootstrap.css')
    .version()
    .sourceMaps();
