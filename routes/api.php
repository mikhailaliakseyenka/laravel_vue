<?php


Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/', [App\Http\Controllers\Person\StoreController::class, '__invoke']);
    Route::get('/', [App\Http\Controllers\Person\IndexController::class, '__invoke']);
    Route::patch('/{person}', [App\Http\Controllers\Person\UpdateController::class, '__invoke']);
});
