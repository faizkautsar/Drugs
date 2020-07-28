<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\User;
use App\Rehabilitasi;
class DashboardKaryawanController extends Controller
{
  public function _construct()
  {
    $this->middleware('guest:karyawan')->except('logout');
  }

    public function index_karyawan()
    {
      $laporan = Laporan::all();
      $user = User::all();
      $rehabilitasi = Rehabilitasi::all();
      return View('pages.Admin2.Dashboard.dashboard', compact('laporan', 'user', 'rehabilitasi'));
    }

  }
