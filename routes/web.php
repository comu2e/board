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
Route::get('','App\Http\Controllers\HomeController@index');

Route::get('post','App\Http\Controllers\PostController@index')->name('post');
Route::post("post","App\Http\Controllers\PostController@addPost");

//view_allでのポスト、
Route::get('view_all','App\Http\Controllers\PostController@view_all')->name('view_all');

//detailの編集　削除
//詳細の表示
Route::get('detail/{id?}','App\Http\Controllers\PostController@detailView')->name('detail_view');
//削除ボタン
Route::get('delete/{id}/','App\Http\Controllers\PostController@deleteSelect')->name('delete');
//編集
Route::post('detail/{id?}','App\Http\Controllers\PostController@editPost');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
