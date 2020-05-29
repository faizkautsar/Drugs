<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AuthUserController extends Controller
{
    public function register(Request $request)
    {
      $rule = [
        'nama' => 'required|min:3|max:50',
        'email' => 'required|email|unique:users',
        'password'=>'required|min:6',
        'no_telp' => 'required|numeric|unique:users|digits_between:11,13',
        'alamat' => 'required|min:5',
        'desa' => 'required|min:3',
        'kecamatan' => 'required|min:3|max:50',
        'kode_pos' => 'required|numeric|digits_between:5,5'
      ];

      $message = [
        'required' => 'Isi bidang ini',
        'nama.min' => 'Nama terlalu pendek',
        'nama.max' => 'Nama terlalu panjang',
        'email.unique' => 'Email sudah terdaftar',
        'password.min' => 'Password Terlalu Pendek',
        'no_telp.unique' => 'No Telepon sudah terdaftar',
        'alamat.min' => 'Alamat terlalu pendek',
        'desa.min' => 'Nama desa terlalu pendek',
        'kecamatan.min' => 'Nama kecamatan terlalu pendek',
        'kecamatan.max' => 'Nama kecamatan terlalu panjang',
        'kode_pos.digits_between' => 'Kode Pos tidak benar',
      ];

      $this->validate($request, $rule, $message);

      $user = User::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'no_telp' => $request->no_telp,
        'alamat' => $request->alamat,
        'desa' => $request->desa,
        'kecamatan' => $request->kecamatan,
        'kode_pos' => $request->kode_pos,
        'api_token' => bcrypt($request->email),
      ]);

      return response()->json([
        'message' => 'registrasi berhasil',
        'status' => true,
        'data' => $user
      ]);
    }

    public function login(Request $request)
    {
      $rule = [
        'email' => 'required',
        'password'=>'required',
      ];

      $message = [
        'required' => 'Isi bidang ini',
      ];

      $this->validate($request, $rule, $message);
      $credentials = [
        'email' => $request->email,
        'password' => $request->password
      ];

      if(Auth::guard('user')->attempt($credentials)){
        $user = Auth::guard('user')->user();
        return response()->json([
          'message' => 'login berhasil',
          'status' => true,
          'data' => $user
        ]);
      }

      return response()->json([
        'message' => 'login gagal',
        'status' => false,
        'data' => (object) []
      ]);
    }
}
