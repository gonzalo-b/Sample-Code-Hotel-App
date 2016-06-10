var elixir = require('laravel-elixir');

var bootstrapPath = 'node_modules/bootstrap-sass/assets';

var bowerDir = './bower_components/';


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {


    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');


    mix.scripts([
        'jquery/dist/jquery.min.js',
    ], 'public/js/all.js', bowerDir);

});
