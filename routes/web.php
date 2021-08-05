<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detail/{pizzaName}', 'HomeController@detail');
Route::get('/search', 'HomeController@search');
Route::get('/transactiondetail/{transactionID}', 'TransactionHistoryController@viewTransDetail');
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/addpizza', 'PizzaController@viewaddPizza');
    Route::get('/updatepizza/{pizzaname}', 'PizzaController@viewUpdatePizza');
    Route::get('/deletepizza/{pizzaname}', 'PizzaController@viewDeletePizza');
    Route::post('/addpizzas', 'PizzaController@addPizza');
    Route::get('/deletepizzas/{pizzaid}', 'PizzaController@deletePizza');
    Route::post('/updatepizzas/{pizzaid}', 'PizzaController@updatePizza');
    Route::get('/viewalluser', 'AllUserController@index');
    Route::get('/viewallusertransaction', 'AllUserTransController@index');
});
Route::group(['middleware' => ['auth', 'role:Member']], function () {
    Route::get('/cart', 'CartController@index');
    Route::post('/addtocart/{pizzaID}', 'CartController@addToCart');
    Route::post('/updateqty/{pizzaID}', 'CartController@updateQty');
    Route::get('/deleteqty/{pizzaID}', 'CartController@deleteQty');
    Route::get('/checkout', 'CartController@checkout');
    Route::get('/transactionhistory', 'TransactionHistoryController@index');
});