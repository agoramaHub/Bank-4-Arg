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

/*
* Guest Area
* Login/Register
*/

Route::get('/', 'LoginController@index');

Route::get('/about', 'LoginController@create');

Route::get('/login', [ 'as' => 'login', 'uses' => 'LoginController@index']);

Route::post('/login', 'SessionsController@store');

Route::post('/register', 'RegistrationController@store');

Route::post('/logout', 'SessionsController@destroy');


/*
/*
* User Area
* Account/Forum
*/

/*
* Account area
*/
Route::get('/account', 'AccountsController@index')->name('home');

Route::get('/account/arg/{id}', 'AccountsController@show');

Route::get('/account/deposit', 'AccountsController@create');

Route::post('/account/deposit', 'DepositsController@store');

/*
* Forum Area
*/
Route::get('/notices', 'ForumController@index');

Route::get('/notices/create', 'ForumController@create');

Route::post('/notices', 'ForumController@store');

Route::get('/notices/{notice}', 'ForumController@show');

Route::post('/notices/{forum}/comments', 'CommentsController@store');

/*
* Admin routes
*/
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('/account/pending/', 'DepositsController@pending');

Route::get('/account/pending/{id}', 'DepositsController@show');

Route::delete('/account/pending/{id}', 'DepositsController@value');

Route::get('/account/personal', 'AccountsController@personal');
