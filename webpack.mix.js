let mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        rules: [{
            test: /\.js?$/,
            use: [{
                loader: 'babel-loader',
                options: mix.config.babel()
            }]
        }]
    },
});

if (mix.inProduction()) {
    mix.options({
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    });
    mix.version();
} else {
    // your extra settings for dev
}

mix
    .setPublicPath( 'resources/assets/dist' )
    .setResourceRoot( '/assets/{slug}/' )
    .js('resources/assets/js/app.js', 'resources/assets/dist/js')
    .extract([
        // extract your libraries here
    ])
    .sass('resources/assets/sass/vendor.scss', 'resources/assets/dist/css')
    .sass('resources/assets/sass/app.scss', 'resources/assets/dist/css')
    .copy('resources/assets/images', 'resources/assets/dist/images')
    .copy('resources/assets/fonts', 'resources/assets/dist/fonts')
    /**
     * copy assets to the relevant laravel public folder
     */
    .copy( 'resources/assets/dist', '{laravelinstallationpath}/public/assets/{slug}' )
;