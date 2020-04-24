<?php

 use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Books', function () { 
    return view('books.index', [
        'books' => App\Books::get()
    ]);
});

Route::get('books', 'BooksController@index');
Route::get('books/{books}', 'BooksController@show')->name('books.show');
// Route::post('Books', 'BooksController@store');
// Route::get('Books/create', 'BooksController@create');
// Route::get('Books/{book}/edit', 'BooksController@edit');
// Route::put('Books/{book}', 'BooksController@update');