<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/books/{id}/category/{catId}', function () {
    return 'book number '.request()->id." category id".request()->catId;
});


Route::get('/{name}', function () {
    return view('welcome');
});

