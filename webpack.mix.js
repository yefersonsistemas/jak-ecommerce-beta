const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources'
        }
    }
});


mix.js('resources/js/shipit template/main.js', 'public/js')
    .js('resources/js/panel js/main_panel.js', 'public/js');
