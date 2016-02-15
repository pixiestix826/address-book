<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Use named routes to generate urls or redirects
// specify route name for controller actions
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::get('contacts', [
    'as' => 'contacts',
    'uses' => 'ContactsController@contacts'
]);
//additonal route resources
Route::resource('contacts', 'ContactsController');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('home', function() {
//     return view('pages.home');
// });
//
// Route::get('/', 'WelcomeController@index');
//
// Route::controller('contacts', 'ContactsController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () use ($router) {
    $router->resource('pages.home', 'PagesController');
});
Route::group(['middleware' => ['web']], function () use ($router) {
    $router->resource('contacts.index', 'ContactsController');
});
Route::group(['middleware' => ['web']], function () use ($router) {
    $router->resource('contacts.create', 'ContactsController');
});
Route::group(['middleware' => ['web']], function () use ($router) {
    $router->resource('contacts.edit', 'ContactsController');
});
Route::group(['middleware' => ['web']], function () use ($router) {
    $router->resource('contacts.update', 'ContactsController');
});
