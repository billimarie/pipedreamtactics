var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.less('app.less')

    // merge style sheets

    .styles([
      'app.css',
      'bootstrap.min.css',
      'font-awesome.min.css',
      'select2.min.css'
    ], 'public/css/all.css')

    .scripts([
      'jquery.js',
      'select2.min.js',
      'bootstrap.min.js'
    ], 'public/js/all.js')

    .version(['css/all.css', 'js/all.js']);
});
