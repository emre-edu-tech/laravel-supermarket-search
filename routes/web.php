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

//**** FRONTEND PAGES CONTROLLER ****/
Route::get('/', 'PagesController@index');
Route::get('/market-ara', 'PagesController@marketSearch');
Route::get('/iletisim', 'PagesController@contact');
Route::get('/gizlilik', 'PagesController@privacy');
Route::get('/market-detay', 'PagesController@marketDetails');
//**** FRONTEND PAGES CONTROLLER ****/