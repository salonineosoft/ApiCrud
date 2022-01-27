<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
Route::get('addpost',[main::class,"addpost"]);
Route::post('insertdb',[main::class,"insertdb"]);
Route::get('show',[main::class,"show"]);
Route::post('update',[main::class,"update"]);
Route::get('edit/{id}',[main::class,"edit"]);
Route::get('delete/{id}',[main::class,"delete"]);
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
