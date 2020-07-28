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
    // dd($request->all());
      $karyawan = [
        'email' => $request->email,
        'password' => $request->password,
      ];

      if(Auth::guard('karyawan')->attempt($karyawan, $request->remember)){
        return redirect()->route('dash_karyawan');
      }
      return redirect()->back()->withInput($request->only('email','remember'));
  }

  public function logout()
  {
    Auth::guard('karyawan')->logout();
    return redirect()->route('karyawan.login');
  }
}
