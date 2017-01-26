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
        .scripts([
            './node_modules/jquery/dist/jquery.js',
            './node_modules/bootstrap/dist/js/bootstrap.js',
            './node_modules/list.js/dist/list.js',
            './node_modules/holderjs/holder.js',
            './node_modules/smooth-scroll/dist/js/smooth-scroll.js',
            './node_modules/chart.js/dist/Chart.js',
            'projectlist.js',
            'clickcounter.js',
            'stats.js'
        ], 'public/js/app.js')
        .version(['js/app.js', 'css/app.css'])
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
    ;
});
