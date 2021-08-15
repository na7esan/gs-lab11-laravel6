<?php


//Auth
Auth::routes();

//
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'BooksController@index')->name('home');
    Route::resource('books', BooksController::class)
        ->except(['index', 'create']);
});
