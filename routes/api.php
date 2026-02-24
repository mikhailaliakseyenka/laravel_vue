<?php


Route::group(['namespace' => 'Person', 'prefix' => 'people'], function () {
    Route::post('/', [App\Http\Controllers\Person\StoreController::class, '__invoke'])->name('person');
});
