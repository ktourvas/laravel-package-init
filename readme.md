#Laravel package boilerplate

A little handy initializer for people working on multiple laravel packages

##Getting started

Clone this repository into a suitable folder on your local development station and delete the .git folder.   

Open folder in bash/terminal and run 

```bash
php scripts/config.php 
``` 

the script above will ask for the following information 

- package vendor name 
- package name 
- your preferred namespace for your new package 
- the slug you would like to use for views and assets folder 
- the path to your local laravel installation 

Following your inputs for the above, the main boilerplate's files will be configured accordingly leaving you with a simple package consisting of

- A simple ServiceProvider with  
    * Views loaded from /resources/views
    * Routes loaded from /src/routes/web.php
    * Migrations loaded from /database/migrations
    * Assets publishing from /resources/assets/dist to laravel's /public/assets/{slug}    
- One route "/" called home
- A basic controller serving the route above with a blade view called home (/resources/views/app/home)

You may then delete the scripts folder as well since there is no need for the config.php script anymore. 

After the above, you can start working on your package as suited. 

##Managing assets 
The boilerplate comes with a package.json file as the one found in a fresh laravel installation and a webpack.mix.js to be used by laravel-mix. 

If you open webpack.mix.js you will see the following setup 

```js
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
    .copy( 'resources/assets/dist', '{your_laravel_installation_path}/public/assets/{slug}' )
;
```

essentially compiling and sending assets directly to your laravel public folder while you're working on your package  
 
run 
```bash 
npm i
``` 
start working and compile as suited 
```bash 
npm run dev / watch / prod 
``` 

##Require in Laravel

### locally
Add a repositories object in your laravel's composer.json file and add 

```json
"package-name": {
        "type": "path",
        "url": "local/path/to/your/package",
        "options": {
            "symlink": true
        }
    },
```
run 
```bash
composer require vendor/package-name
```
add the package's service provider to the /config/app.php file 
```php
yournamespace/PackageServiceProvider::class
```

### via vcs 

Add a repositories object in your laravel's composer.json file and add 

```json
"package-name": {
        "type": "vcs",
        "url": "your-vcs-url"
    },
```
same as above

### via packagist 
If your package is hosted by packagist simply run the composer require command 