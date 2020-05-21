<?php

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
// 在之前的路由后面配上中间件
//Route::get('/', 'PagesController@root')->name('root')->middleware('verified');
Route::get('/', 'PagesController@root')->name('root');

Auth::routes(['verify' => true]);

