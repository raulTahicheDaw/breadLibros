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

Route::Resource('users', 'UserController');
Route::Resource('books', 'BookController');

Route::Resource('buyers', 'BuyerController', ['only' => ['index', 'show']]);

Route::post('transactions/comprar', 'TransactionController@comprar');
Route::get('transactions/{id}', 'TransactionController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'BookController@index')->name('home');
