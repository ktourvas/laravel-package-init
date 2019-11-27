<?php

Route::group([ 'middleware' => [ 'web' ] ], function () {

    /**
     * public app
     */
    Route::get('/', '{PackageNamespace}\Http\Controllers\PackageController@index')->name('home');

});
