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


Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/admin/heroes','App\Http\Controllers\HeroController@index')->name ('admin.heroes');
Route::get('/admin/items','App\Http\Controllers\ItemController@index')->name ('admin.items');
Route::get('/admin/enemies','App\Http\Controllers\EnemiesController@index')->name ('admin.enemies');
