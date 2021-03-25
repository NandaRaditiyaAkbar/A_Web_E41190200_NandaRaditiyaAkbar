<?php

use Illuminate\Support\Facades\Route;
Route::get('/users', [ManagementUserController::class, 'index']);
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
// Route::get('user', 'App\Http\Controllers\ManagementUserController@index');
Route::resource('user', 'App\Http\Controllers\ManagementUserController');