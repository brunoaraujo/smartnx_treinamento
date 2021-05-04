<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'categorias'], function(){
    Route::get('/', 'App\Http\Controllers\CategoriaController@getIndex')->name('app.categorias.index');
    Route::get('/index', 'App\Http\Controllers\CategoriaController@getIndex')->name('app.categorias.index');
    Route::get('/create', 'App\Http\Controllers\CategoriaController@getCreate')->name('app.categorias.create');
    Route::post('/create', 'App\Http\Controllers\CategoriaController@postCreate')->name('app.categorias.create');
    Route::get('/edit/{id}', 'App\Http\Controllers\CategoriaController@getEdit')->name('app.categorias.edit');
    Route::put('/edit/{id}', 'App\Http\Controllers\CategoriaController@putEdit')->name('app.categorias.edit');
    Route::get('/delete/{id}', 'App\Http\Controllers\CategoriaController@getDelete')->name('app.categorias.delete');
});
