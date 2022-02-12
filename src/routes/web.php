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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DashBoardController@index')->name('top');;
Route::get('/dashboard/remote/{category_id}', 'App\Http\Controllers\RemoteCodeController@remote')->name('remote');
Route::get('/dashboard/remote', 'App\Http\Controllers\RemoteCodeController@index')->name('remote');
Route::post('/dashboard/remote/send', 'App\Http\Controllers\RemoteCodeController@send');
// Route::post('/dashboard/remote/{category_id}/send/{id}', 'App\Http\Controllers\DashBoardController@send');
// Route::get('/dashboard/remote/{category_id}', 'App\Http\Controllers\DashBoardController@categorylist');

Route::get('/dashboard/tools', 'App\Http\Controllers\ToolsController@index')->name('tools');
Route::post('/dashboard/tools/trim', 'App\Http\Controllers\ToolsController@trim')->name('tools');
Route::get('/dashboard/translate', 'App\Http\Controllers\TranslateController@index')->name('translate');
Route::post('/dashboard/translate', 'App\Http\Controllers\TranslateController@translateJpEn')->name('translate');
Route::get('/dashboard/test', 'App\Http\Controllers\DashBoardController@test');
// Route::get('/dashboard/tools/trim2', 'App\Http\Controllers\DashBoardController@trim2');
// Route::resource('/dashboard', 'App\Http\Controllers\DashBoardController');