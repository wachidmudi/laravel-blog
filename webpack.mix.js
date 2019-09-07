const { mix } = require('laravel-mix');

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

mix.scripts([
	  'resources/assets/js/jquery.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.countTo.js',
    'resources/assets/js/jquery.easing.1.3.js',
    'resources/assets/js/jquery.flexslider-min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/jquery.stellar.min.js',
    'resources/assets/js/jquery.waypoints.min.js',
  	'resources/assets/js/magnific-popup-options.js',
  	'resources/assets/js/jquery.magnific-popup-options.js',
  	'resources/assets/js/main.js'    
   ], 'public/js/main.js')
   // .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   // .extract(['jquery', 'vue', 'axios', 'bootstrap-sass']);
   .extract(['jquery', 'bootstrap-sass'])
   .sourceMaps();
