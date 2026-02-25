<?php


Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/', [App\Http\Controllers\Person\StoreController::class, '__invoke'])->name('person');
    Route::get('/', [App\Http\Controllers\Person\IndexController::class, '__invoke'])->name('person');
});
