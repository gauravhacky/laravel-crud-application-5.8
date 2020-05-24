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

Route::get('/', function () {
    return view('books.list');
});

Route::get('/books','BooksController@index')->name('book.list');
Route::get('/create/books','BooksController@createBooks')->name('book.create'); 
Route::get('/show/book/{id}','BooksController@showBooks')->name('book.show');
Route::get('/edit/book/{id}','BooksController@editBooks')->name('book.edit');  
Route::post('/store/book','BooksController@storeBooks')->name('book.store');
Route::post('/update/book/{id}','BooksController@updateBooks')->name('book.update');
Route::get('/delete/book/{id}','BooksController@deleteBooks')->name('book.delete');