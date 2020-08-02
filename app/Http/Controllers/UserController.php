<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  public function _construct()
  {
    $this->middleware('auth:karyawan');
  }

    public function index(){
      $user = User::all();
      return view('pages.Admin2.User.user', compact('user'));
    }

    public function update(User $user){
      $user->update(['status' => !$user->status]);
      return redirect()->back();
    }

}
