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
Route::resource('dashboard', 'dashboardController');

Route::resource('/', 'dashboardController');

Route::resource('smallarms', 'SmallArmsController');

Route::resource('warbirds', 'WarbirdsController');

Route::resource('warships', 'WarshipsController');

Route::resource('strikebombers', 'StrikeBombersController');

Route::resource('products', 'ProductsController');

Route::resource('affiliated', 'AffiliatedController');

Route::resource('restrictions', 'RestrictionsController');

Route::resource('specifics', 'SpecificsController');

Route::resource("faq", 'FAQController');
