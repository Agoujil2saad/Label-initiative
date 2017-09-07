let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/search.js', 'public/js')
    .js('resources/assets/js/user-notifications.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
   .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js');