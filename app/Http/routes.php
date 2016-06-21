<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', ['middleware' => 'auth', 'uses' => 'DashboardController@index']);
Route::get('/home/{id}', ['middleware' => 'auth', 'uses' => 'DashboardController@show']);
/* ログイン画面の表示 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
/* ログイン処理 */
Route::post('auth/login', 'Auth\AuthController@postLogin');
/* ログアウト */
Route::get('auth/logout', 'Auth\AuthController@getLogout');
/* ユーザー登録画面の表示 */
Route::get('auth/register', 'Auth\AuthController@getRegister');
/* ユーザー登録処理 */
Route::post('auth/register', 'Auth\AuthController@postRegister');
// パスワードリセットリンクを要求するルート…
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// パスワードリセットルート
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//
//Route::get('users','UsersController@index');
//Route::get('users/create','UsersController@create');
//Route::post('users/store','UsersController@store');

//
//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/{id}', 'ArticlesController@show');

//Route::get('bookinginfos', 'BookingInfosController@index');
//Route::get('bookinginfos/{id}', 'BookingInfosController@show');
    