<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
class AuthAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function _construct()
     {
       $this->middleware('guest:admin')->except('logout');
     }

    public function index(){
      return view('auth.login_admin');
    }

    public function login(Request $request)
    {
        $admin = [
          'username' => $request->username,
          'password' => $request->password,
        ];
        if(Auth::attempt($admin, $request->remember)){
          return redirect('/admin');
        }
        return redirect()->back()->withInput($request->only('username','remember'));
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/admin/login');
    }

}
