<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
      $user = User::all();
      return view('pages.User.user', compact('user'));
    }

    public function update(User $user){
      $user->update(['status' => !$user->status]);
      return redirect()->back();
    }
}
