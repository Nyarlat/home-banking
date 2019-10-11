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


Route::get('/','HomeController@index');

Route::get('balance', 'BalanceController@index');

Route::get('service', 'ServiceController@index');
Route::resource('service', 'ServiceController');
Route::post('service/pay', 'ServiceController@pay') -> name('service.pay');

Route::get('investments', 'InvestmentController@index');
Route::get('investments/buy{id}', 'InvestmentController@buy') -> name('investment.buy');
Route::get('investments/sell{id}', 'InvestmentController@sell') -> name('investment.sell');
Route::resource('investments', 'InvestmentController');

