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

mix.setPublicPath('public')
    .setResourceRoot('../')
    .copyDirectory('resources/images/static', 'public/images/static')
    .js('resources/js/frontend/app.js', 'js/frontend.js')
    .sass('resources/sass/frontend/app.scss', 'css/frontend.css')
    .extract([
        /* Extract packages from node_modules to vendor.js */
        'jquery',
        'bootstrap',
        'popper.js',
        'lodash',
        'swiper',
        // 'jquery-sticky',
        // 'flexslider',
        'lightgallery'
    ])
    .sourceMaps();

if (mix.inProduction()) {
    mix.version()
        .options({
            // optimize js minification process
            terser: {
                cache: true,
                parallel: true,
                sourceMap: true
            }
        });
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({ devtool: 'inline-source-map' });
}
