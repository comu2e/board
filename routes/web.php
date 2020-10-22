<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
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
Auth::routes();

Route::resource('admin', 'App\Http\Controllers\AdminController');





//Route::get('','App\Http\Controllers\HomeController@index');
//
//Route::get('/create','App\Http\Controllers\PostController@index')->name('create');
//Route::post("/create","App\Http\Controllers\PostController@create");
//
////indexでのポスト、
//Route::get('index','App\Http\Controllers\PostController@index')->name('index');
//
////detailの編集　削除
////詳細の表示
//Route::get('detail/{id?}','App\Http\Controllers\PostController@detailView')->name('detail_view');
////削除ボタン
//Route::get('delete/{id}/','App\Http\Controllers\PostController@deleteSelect')->name('delete');
////編集
//Route::post('detail/{id?}','App\Http\Controllers\PostController@editPost');
//
//
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
