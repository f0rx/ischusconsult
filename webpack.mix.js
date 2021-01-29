const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .js('resources/js/recruit.js', 'public/js')
    .vue()
    .postCss('resources/css/recruit.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('autoprefixer'),
    ]);
