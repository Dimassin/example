<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Car'], function() {
    Route::get('/cars', 'IndexController')->name('car.index');
    Route::get('/cars/create', 'CreateController')->name('car.create');
    Route::post('/cars/store', 'StoreController')->name('car.store');
    Route::get('/cars/{car}', 'ShowController')->name('car.show');
    Route::get('/cars/{car}/edit', 'EditController')->name('car.edit');
    Route::patch('/cars/{car}', 'UpdateController')->name('car.update');
    Route::delete('/cars/{car}', 'DestroyController')->name('car.delete');
});

