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
Route::get('zat-adiktif', 'Api\NarkobaController@zat-adiktif');
Route::get('pencegahan', 'Api\NarkobaController@pencegahan');
Route::get('hukum', 'Api\NarkobaController@hukum');
Route::get('statistik', 'Api\NarkobaController@statistik');
Route::get('bahaya', 'Api\NarkobaController@bahaya');


Route::post('register', 'Api\User\AuthUserController@register');
Route::post('login', 'Api\User\AuthUserController@login');
Route::get('email/verify/{id}', 'Api\User\VerificationController@verify')->name('api.verification.verify');
Route::get('email/resend', 'Api\User\VerificationController@resend')->name('api.verification.resend');

Route::post('laporan','Api\User\PesanController@laporan');
Route::post('profile-update', 'Api\User\AuthUserController@profileUpdate')->middleware('auth:user-api');
Route::get('profile','Api\User\AuthUserController@profile')->middleware('auth:user-api');
Route::post('uploadFoto','Api\User\AuthUserController@uploadFoto')->middleware('auth:user-api');

Route::get('test', function(){
    event(new App\Events\LaporanEvent('memek becek'));
    return "Event has been sent!";
});
