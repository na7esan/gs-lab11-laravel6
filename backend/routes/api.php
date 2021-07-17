<?php

use App\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('aaa', function () {
    return "aaa";
});

Route::get('users', function () {
    $users = User::get();
    return $users;
});

Route::apiResource('favorite-sites', 'FavoriteSiteController');

Route::get('csrf', 'CsrfController@index')->name('csrf');
Route::post('regist', 'API\Auth\RegisterController@register')->name('register');