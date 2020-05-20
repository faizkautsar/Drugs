<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('rehabilitasi','Api\NarkobaController@rehabilitasi');
Route::get('narkotika','Api\NarkobaController@narkotika');
Route::get('psikotropika', 'Api\NarkobaController@psikotropika');
Route::get('zat-adiktif', 'Api\NarkobaController@bhn_adiktif');
Route::get('pencegahan', 'Api\NarkobaController@pencegahan');
Route::get('hukum', 'Api\NarkobaController@hukum');
Route::get('statistik', 'Api\NarkobaController@statistik');
