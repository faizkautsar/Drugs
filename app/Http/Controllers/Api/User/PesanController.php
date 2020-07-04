<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Laporan;

class PesanController extends Controller
{
    public function __construct(){
      $this->middleware('auth:user-api');
    }

    public function laporan(Request $request){
    $user = Auth::user();
    if($user->status){
      $rule = [
        'peran' => 'required',
        'nama' => 'required',
        'no_telp' => 'required|numeric|digits_between:11,13',
        'jalan' => 'required',
        'desa' => 'required',
        'kecamatan' => 'required',
        'kota' => 'required',
        'jenis_narkoba' => 'required',
        'pekerjaan' => 'required|min:3',
        'kegiatan' => 'required',
        'tmpt_transaksi' => 'required'
      ];

      $message = [
        'required' => 'Isi bidang ini',
        // 'nama.min' => 'Nama terlalu pendek',
        // 'nama.max' => 'Nama terlalu panjang',
        // 'email.unique' => 'Email sudah terdaftar',
        // 'password.min' => 'Password Terlalu Pendek',
        // 'no_telp.unique' => 'No Telepon sudah terdaftar',
      //   'alamat.min' => 'Alamat terlalu pendek',
      //   'desa.min' => 'Nama desa terlalu pendek',
      //   'kecamatan.min' => 'Nama kecamatan terlalu pendek',
      //   'kecamatan.max' => 'Nama kecamatan terlalu panjang',
      //   'kode_pos.digits_between' => 'Kode Pos tidak benar',
       ];

      $this->validate($request, $rule, $message);

      $alamat = $request->jalan.', '.$request->desa.', '.$request->kecamatan.', '.$request->kota;
      Laporan::create([
        'peran' => $request->peran,
        'nama' => $request->nama,
        'no_telp' => $request->no_telp,
        'alamat' => $alamat,
        'jenis_narkoba' => $request->jenis_narkoba,
        'pekerjaan' => $request->pekerjaan,
        'kendaraan'=>$request->kendaraan,
        'kegiatan' => $request->kegiatan,
        'tmpt_transaksi' => $request->tmpt_transaksi,
        'id_user' => $user->id
      ]);

      return response()->json([
        'message' => 'success',
        'status' => true,
        'data' => (object) []
      ]);
    // }else {
    //   return response()->json([
    //     'message' => 'Akun anda dinonaktifkan',
    //     'status' => false,
    //     'data' => (object) []
    //   ]);
    // }
  }
}
