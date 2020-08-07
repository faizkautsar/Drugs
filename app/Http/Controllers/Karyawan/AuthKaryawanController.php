<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Karyawan;

class AuthKaryawanController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function _construct()
   {
     $this->middleware('guest:karyawan');
   }

  public function index(){
    return view('auth.login_karyawan');
  }

  public function login(Request $request)
  {
    $rule= [
      'email'=>'required|email',
      'password' =>'required|min:8|numeric',

    ];

    $this->validate($request,$rule);
      $karyawan = [
        'email' => $request->email,
        'password' => $request->password,
      ];

      if(Auth::guard('karyawan')->attempt($karyawan, $request->remember)){
          $karyawan = Auth::guard('karyawan')->user();
          if ($karyawan->status) {
            return redirect()->route('dash_karyawan');
          }else{
              return redirect()->back()->withInput($request->only('email','remember'))
              ->with('warning', 'akun anda telah di matikan, harap hubungi super admin');
          }
      }
      return redirect()->back()->withInput($request->only('email','remember'))
      ->with('warning', 'masukkan email dan password yang benar');
  }

  public function logout()
  {
    Auth::guard('karyawan')->logout();
    return redirect()->route('karyawan.login');
  }
}
