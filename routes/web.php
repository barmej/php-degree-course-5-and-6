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

Route::get('/testing','TestsController@index');

Route::get('/',function(){
    return redirect('login');
});

Route::get('/login',function(){
    return 'login page';
})->name('login');

Route::get('/books','BooksController@index');

Route::get('/books/{book}','BooksController@show');

Route::get('/books/{id}/category/{catId}', function () {
    return 'book number '.request()->id." category id".request()->catId;
});

Route::post('/books/create','BooksController@store');

Route::get('/toArabic', 'SessionsController@toArabic');
Route::get('/toEnglish', 'SessionsController@toEnglish');

Route::get('/{name}', function () {
    return view('welcome');
});

//For commit
