<?php

 use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Books', function () { 
    return view('books.show', [
        'books' => App\Books::get()
    ]);
});

Route::get('books', 'BooksController@show');
// Route::get('books', 'BooksController@index');
// Route::post('Books', 'BooksController@store');
// Route::get('Books/create', 'BooksController@create');
// Route::get('Books/{book}/edit', 'BooksController@edit');
// Route::put('Books/{book}', 'BooksController@update');