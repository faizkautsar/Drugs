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
        'no_telp' => 'required|numeric|unique:users|digits_between:10,13',
        'jalan' => 'required|min:5',
        'desa' => 'required|min:3',
        'kecamatan' => 'required|min:3|max:50',
        'kota' => 'required'
      ];

      $message = [
        'required' => 'Isi bidang ini',
        'nama.min' => 'Nama terlalu pendek',
        'nama.max' => 'Nama terlalu panjang',
        'email.unique' => 'Email sudah terdaftar',
        'password.min' => 'Password Terlalu Pendek',
        'no_telp.unique' => 'No Telepon sudah terdaftar',
        'jalan.min' => 'Jalan terlalu pendek',
        'desa.min' => 'Nama desa terlalu pendek',
        'kecamatan.min' => 'Nama kecamatan terlalu pendek',
        'kecamatan.max' => 'Nama kecamatan terlalu panjang',

      ];

      $this->validate($request, $rule, $message);

      $user = User::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'no_telp' => $request->no_telp,
        'jalan' => $request->jalan,
        'desa' => $request->desa,
        'kecamatan' =>$request->kecamatan,
        'kota' =>$request->kota,
        'api_token' => bcrypt($request->email),
      ]);
      $user->sendApiEmailVerificationNotification();
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
        'fcm_token' => 'required'
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

        $user->update(['fcm_token' => $request->fcm_token]);

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
    public function profile()
    {
      $user = Auth::user();
      return response()->json([
        'message' => 'berhasil',
        'status' => true,
        'data' => $user
      ]);
    }


    public function profileUpdate(Request $request)
    {
      $user = Auth::user();
      $rule = [
        'no_telp' => 'required|unique:users,no_telp,'.$user->id,
        // 'foto' => 'image|max:1024|mimes:jpg,png,jpeg',
      ];

      $message = [
        'required' => ':attribute tidak boleh kosong.',
        'min' => 'terlaku pendek',
        'max' => 'dengan benar',
        'no_telp.unique' => 'No Telepon sudah terdaftar'
      ];

      $this->validate($request, $rule, $message);

      $user->update([
        'nama' => $request->nama,
        'no_telp' => $request->no_telp,
        'jalan' => $request->jalan,
        'desa' => $request->desa,
        'kecamatan' => $request->kecamatan,
        'kota' => $request->kota,
        ]);

        $user = User::find(Auth::user()->id);
        return response()->json([
          'message' => 'berhasil',
          'status' => true,
          'data' => $user
        ]);
    }

    public function uploadFoto(Request $request){
      $foto = $request->file('foto')->store('uploads/user');

      Auth::user()->update([
        'foto' => $foto,
        ]);

        $user = User::find(Auth::user()->id);
        return response()->json([
          'message' => 'berhasil',
          'status' => true,
          'data' => $user
        ]);

    }

}
