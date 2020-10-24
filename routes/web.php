<?php


// Route::get('/', function(){
//     return view('auth.login');
// });

// Route::get('/admin', function () {
//     return view('templates.admin');
// });

Auth::routes(['verify' => true]);

Route::get('/', 'AuthAdminController@index')->name('admin.login');
Route::group(['prefix' => 'admin'], function(){
  Route::get('/admin', 'DashboardController@index_admin')->name('dash.index')->middleware('auth:admin');

  Route::post('/login','AuthAdminController@login')->name('admin.to.login')->middleware('auth:admin');
  Route::get('/logout', 'AuthAdminController@logout')->name('admin.logout')->middleware('auth:admin');


   //super_admin
   Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index')->middleware('auth:admin');
   Route::get('/karyawan/tambah','KaryawanController@create')->name('karyawan.tambah')->middleware('auth:admin');
   Route::post('/karyawan/tambah','KaryawanController@store')->name('karyawan.store')->middleware('auth:admin');
   Route::get('/karyawan/status/{karyawan}', 'KaryawanController@cekin')->name('karyawan.status')->middleware('auth:admin');
   Route::get('/karyawan/ubah/{id}', 'KaryawanController@edit')->name('karyawan.ubah')->middleware('auth:admin');
   Route::patch('/karyawan/ubah/{id}', 'KaryawanController@update')->name('karyawan.update')->middleware('auth:admin');


// KARYAWAN
});
Route::group(['prefix' => 'karyawan'], function(){

Route::get('/login', 'Karyawan\AuthKaryawanController@index')->name('karyawan.login');
Route::post('/login','Karyawan\AuthKaryawanController@login')->name('karyawan.to.login');
Route::get('/', 'DashboardKaryawanController@index_karyawan')->name('dash_karyawan')->middleware('auth:karyawan');

Route::get('/logout', 'Karyawan\AuthKaryawanController@logout')->name('karyawan.logout');

//laporan
Route::get('/laporan', 'PesanController@laporan')->name('laporan.index')->middleware('auth:karyawan');
Route::get('/laporan/lihat/{id}', 'PesanController@show')->name('lihat_laporan.index')->middleware('auth:karyawan');
Route::patch('/laporan/update/{laporan}', 'PesanController@update')->name('update.laporan')->middleware('auth:karyawan');
Route::delete('/laporan/hapus{id}','PesanController@destroy')->name('laporan.hapus')->middleware('auth:karyawan');
Route::get('/laporan/pdf','PesanController@pdf')->name('cetak_pdf')->middleware('auth:karyawan');
Route::get('laporan/notifikasi','PesanController@notifyLaporan')->middleware('auth:karyawan');

//users
Route::get('/user', 'UserController@index')->name('user.index')->middleware('auth:karyawan');
Route::patch('/user/update/{user}', 'UserController@update')->name('user.update')->middleware('auth:karyawan');

//narkoba
  Route::group(['prefix' => 'narkotika'], function(){
  Route::get('/', 'NarkotikaController@index')->name('narkotika.index')->middleware('auth:karyawan');
  Route::post('tambah','NarkotikaController@store')->name('narkotika.store')->middleware('auth:karyawan');
  Route::get('tambah','NarkotikaController@create')->name('narkotika.tambah')->middleware('auth:karyawan');
  Route::get('ubah/{id}', 'NarkotikaController@edit')->name('narkotika.ubah')->middleware('auth:karyawan');
  Route::patch('ubah/{id}', 'NarkotikaController@update')->name('narkotika.update')->middleware('auth:karyawan');
  Route::delete('hapus/{id}', 'NarkotikaController@destroy')->name('narkotika.hapus')->middleware('auth:karyawan');
  Route::get('detail/{id}', 'NarkotikaController@show')->name('narkotika.lihat')->middleware('auth:karyawan');
});

Route::group(['prefix' => 'psikotropika'], function(){
  Route::get('/','PsikotropikaController@index')->name('ps.index')->middleware('auth:karyawan');
  Route::get('tambah','PsikotropikaController@create')->name('ps.tambah')->middleware('auth:karyawan');
  Route::post('tambah','PsikotropikaController@store')->name('ps.store')->middleware('auth:karyawan');
  Route::patch('ubah/{id}','PsikotropikaController@update')->name('ps.update')->middleware('auth:karyawan');
  Route::get('ubah/{id}','PsikotropikaController@edit')->name('ps.ubah')->middleware('auth:karyawan');
  Route::delete('hapus/{id}','PsikotropikaController@destroy')->name('ps.hapus')->middleware('auth:karyawan');
  Route::get('detail/{id}','PsikotropikaController@show')->name('ps.lihat')->middleware('auth:karyawan');
});

Route::group(['prefix' => 'zat-adiktif'], function(){
  Route::get('/','BhnAdiktifController@index')->name('bhn_adiktif.index')->middleware('auth:karyawan');
  Route::post('tambah','BhnAdiktifController@store')->name('bhn_adiktif.store')->middleware('auth:karyawan');
  Route::get('tambah','BhnAdiktifController@create')->name('bhn_adiktif.tambah')->middleware('auth:karyawan');
  Route::get('ubah/{id}', 'BhnAdiktifController@edit')->name('bhn_adiktif.ubah')->middleware('auth:karyawan');
  Route::patch('ubah/{id}', 'BhnAdiktifController@update')->name('bhn_adiktif.update')->middleware('auth:karyawan');
  Route::delete('hapus/{id}', 'BhnAdiktifController@destroy')->name('bhn_adiktif.hapus')->middleware('auth:karyawan');
  Route::get('detail/{id}', 'BhnAdiktifController@show')->name('bhn_adiktif.lihat')->middleware('auth:karyawan');
});

//hukum
Route::group(['prefix' => 'hukum'], function(){
   Route::get('/', 'HukumController@index')->name('hukum.index')->middleware('auth:karyawan');
   Route::get('tambah', 'HukumController@create')->name('hukum.tambah')->middleware('auth:karyawan');
   Route::post('tambah', 'HukumController@store')->name('hukum.store')->middleware('auth:karyawan');
   Route::get('ubah/{id}', 'HukumController@edit')->name('hukum.ubah')->middleware('auth:karyawan');
   Route::patch('ubah/{id}', 'HukumController@update')->name('hukum.update')->middleware('auth:karyawan');
   Route::delete('hapus/{id}', 'HukumController@destroy')->name('hukum.hapus')->middleware('auth:karyawan');
   Route::get('detail/{id}', 'HukumController@show')->name('hukum.lihat')->middleware('auth:karyawan');
});

//pencegahan
Route::group(['prefix' => 'pencegahan'], function(){
   Route::get('/', 'PencegahanController@index')->name('pencegahan.index')->middleware('auth:karyawan');
   Route::get('tambah', 'PencegahanController@create')->name('pencegahan.tambah')->middleware('auth:karyawan');
   Route::get('ubah/{id}', 'PencegahanController@edit')->name('pencegahan.ubah')->middleware('auth:karyawan');
   Route::post('tambah', 'PencegahanController@store')->name('pencegahan.store')->middleware('auth:karyawan');
   Route::patch('ubah/{id}', 'PencegahanController@update')->name('pencegahan.update')->middleware('auth:karyawan');
   Route::delete('hapus/{id}', 'PencegahanController@destroy')->name('pencegahan.hapus')->middleware('auth:karyawan');
   Route::get('detail/{id}', 'PencegahanController@show')->name('pencegahan.lihat')->middleware('auth:karyawan');
});

//rehabilitasi
Route::group(['prefix' => 'rehabilitasi'], function(){
  Route::get('/', 'RehabilitasiController@index')->name('rehabilitasi.index')->middleware('auth:karyawan');
   Route::get('tambah', 'RehabilitasiController@create')->name('rehabilitasi.tambah')->middleware('auth:karyawan');
   Route::post('tambah', 'RehabilitasiController@store')->name('rehabilitasi.store')->middleware('auth:karyawan');
   Route::get('ubah/{id}', 'RehabilitasiController@edit')->name('rehabilitasi.ubah')->middleware('auth:karyawan');
   Route::patch('ubah/{id}', 'RehabilitasiController@update')->name('rehabilitasi.update')->middleware('auth:karyawan');
   Route::delete('hapus/{id}', 'RehabilitasiController@destroy')->name('rehabilitasi.hapus')->middleware('auth:karyawan');

});


});
// //narkotika

// Route::group(['prefix' => 'dampak-negatif'], function(){
//    Route::get('/', 'BahayaController@index')->name('dampak.index');
//    Route::get('tambah', 'BahayaController@create')->name('dampak.tambah');
//    Route::post('tambah', 'BahayaController@store')->name('dampak.store');
//    Route::get('ubah/{id}', 'BahayaController@edit')->name('dampak.ubah');
//    Route::patch('ubah/{id}', 'BahayaController@update')->name('dampak.update');
//    Route::get('hapus/{id}', 'BahayaController@destroy')->name('dampak.hapus');
//    Route::get('detail/{id}', 'BahayaController@show')->name('dampak.lihat');
//
// });
// //Auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
