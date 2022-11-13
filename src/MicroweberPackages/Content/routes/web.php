<?php
/**
 * Created by PhpStorm.
 * User: Bojidar
 * Date: 2/16/2021
 * Time: 1:58 PM
 */

Route::name('admin.')
    ->prefix(ADMIN_PREFIX)
    ->middleware(['admin'])
    ->namespace('\MicroweberPackages\Content\Http\Controllers\Admin')
    ->group(function () {
        Route::resource('content', 'ContentController',['except' => ['show']]);
    });
