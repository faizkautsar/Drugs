<?php


// Route::get('/', function(){
//     return view('auth.login');
// });

Route::get('/admin', function () {
    return view('templates.admin');
});

Route::get('pdf', function(){
  return view('pages.Admin1.Lapor.pdf');
});

Route::get('/admin', 'DashboardController@index')->name('dash.index');
  Route::group(['prefix' => 'admin'], function(){
  Route::get('/login', 'AuthAdminController@index')->name('admin.login');
  Route::post('/login','AuthAdminController@login')->name('admin.to.login');
  Route::get('/logout', 'AuthAdminController@logout')->name('admin.logout');

   Route::get('/laporan', 'PesanController@laporan')->name('laporan.index');
   Route::get('/laporan/lihat/{id}', 'PesanController@show')->name('lihat_laporan.index');
   Route::patch('/laporan/update/{laporan}', 'PesanController@update')->name('update.laporan');
   Route::get('/laporan/hapus{id}','PesanController@destroy')->name('laporan.hapus');
   Route::get('/laporan/pdf','PesanController@pdf')->name('cetak_pdf');

   //users
   Route::get('/user', 'UserController@index')->name('user.index');
   Route::patch('/user/update/{user}', 'UserController@update')->name('user.update');

   //Admin1
   Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
   Route::get('/karyawan/tambah','KaryawanController@create')->name('karyawan.tambah');
   Route::post('/karyawan/tambah','KaryawanController@store')->name('karyawan.store');
   Route::get('/karyawan/ubah/{id}', 'KaryawanController@edit')->name('karyawan.ubah');
   Route::patch('/karyawan/ubah/{id}', 'KaryawanController@update')->name('karyawan.update');

   Route::group(['prefix' => 'rehabilitasi'], function(){
     Route::get('/', 'RehabilitasiController@index')->name('rehabilitasi.index');
      Route::get('tambah', 'RehabilitasiController@create')->name('rehabilitasi.tambah');
      Route::post('tambah', 'RehabilitasiController@store')->name('rehabilitasi.store');
      Route::get('ubah/{id}', 'RehabilitasiController@edit')->name('rehabilitasi.ubah');
      Route::patch('ubah/{id}', 'RehabilitasiController@update')->name('rehabilitasi.update');
      Route::get('hapus/{id}', 'RehabilitasiController@destroy')->name('rehabilitasi.hapus');

   });


// KARYAWAN
});
Route::group(['prefix' => 'karyawan'], function(){
Route::get('/login', 'Karyawan\AuthKaryawanController@index')->name('karyawan.login');
Route::post('/login','Karyawan\AuthKaryawanController@login')->name('karyawan.to.login');
Route::get('/logout', 'Karyawan\AuthKaryawanController@logout')->name('karyawan.logout');


Route::group(['prefix' => 'narkotika'], function(){
  Route::get('/', 'NarkotikaController@index')->name('narkotika.index');
  Route::get('tambah','NarkotikaController@create')->name('narkotika.tambah');
  Route::post('tambah','NarkotikaController@store')->name('narkotika.store');
  Route::get('ubah/{id}', 'NarkotikaController@edit')->name('narkotika.ubah');
  Route::patch('ubah/{id}', 'NarkotikaController@update')->name('narkotika.update');
  Route::get('hapus/{id}', 'NarkotikaController@destroy')->name('narkotika.hapus');
  Route::get('detail/{id}', 'NarkotikaController@show')->name('narkotika.lihat');
});

Route::group(['prefix' => 'psikotropika'], function(){
  Route::get('/','PsikotropikaController@index')->name('ps.index');
  Route::get('tambah','PsikotropikaController@create')->name('ps.tambah');
  Route::post('tambah','PsikotropikaController@store')->name('ps.store');
  Route::get('ubah/{id}','PsikotropikaController@edit')->name('ps.ubah');
  Route::patch('ubah/{id}','PsikotropikaController@update')->name('ps.update');
  Route::get('hapus/{id}','PsikotropikaController@destroy')->name('ps.hapus');
  Route::get('detail/{id}','PsikotropikaController@show')->name('ps.lihat');
});

Route::group(['prefix' => 'zat-adiktif'], function(){
  Route::get('/','BhnAdiktifController@index')->name('bhn_adiktif.index');
  Route::get('tambah','BhnAdiktifController@create')->name('bhn_adiktif.tambah');
  Route::post('tambah','BhnAdiktifController@store')->name('bhn_adiktif.store');
  Route::get('ubah/{id}', 'BhnAdiktifController@edit')->name('bhn_adiktif.ubah');
  Route::patch('ubah/{id}', 'BhnAdiktifController@update')->name('bhn_adiktif.update');
  Route::get('hapus/{id}', 'BhnAdiktifController@destroy')->name('bhn_adiktif.hapus');
  Route::get('detail/{id}', 'BhnAdiktifController@show')->name('bhn_adiktif.lihat');
});


Route::group(['prefix' => 'hukum'], function(){
   Route::get('/', 'HukumController@index')->name('hukum.index');
   Route::get('tambah', 'HukumController@create')->name('hukum.tambah');
   Route::post('tambah', 'HukumController@store')->name('hukum.store');
   Route::get('ubah/{id}', 'HukumController@edit')->name('hukum.ubah');
   Route::patch('ubah/{id}', 'HukumController@update')->name('hukum.update');
   Route::get('hapus/{id}', 'HukumController@destroy')->name('hukum.hapus');
   Route::get('detail/{id}', 'HukumController@show')->name('hukum.lihat');
});


Route::group(['prefix' => 'pencegahan'], function(){
   Route::get('/', 'PencegahanController@index')->name('pencegahan.index');
   Route::get('tambah', 'PencegahanController@create')->name('pencegahan.tambah');
   Route::post('tambah', 'PencegahanController@store')->name('pencegahan.store');
   Route::get('ubah/{id}', 'PencegahanController@edit')->name('pencegahan.ubah');
   Route::patch('ubah/{id}', 'PencegahanController@update')->name('pencegahan.update');
   Route::get('hapus/{id}', 'PencegahanController@destroy')->name('pencegahan.hapus');
   Route::get('detail/{id}', 'PencegahanController@show')->name('pencegahan.lihat');
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
