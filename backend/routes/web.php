<?php

// 認証ルート
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'BooksController@index')->name('home');
    Route::resource('books', BooksController::class)
        ->except(['index', 'create']);
});
