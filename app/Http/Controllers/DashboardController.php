<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\User;
use App\Rehabilitasi;
class DashboardController extends Controller
{
  public function _construct()
  {
    $this->middleware('auth.admin')->expect('admin.to.logout');
  }

    public function index_admin()

    {
      $laporan = Laporan::all();
      $user = User::all();
      $rehabilitasi = Rehabilitasi::all();
    return View('pages.Admin1.Dashboard.dashboard', compact('laporan','user','rehabilitasi'));
    }


  }
