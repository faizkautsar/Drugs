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
    $this->middleware('auth');
  }

    public function index()

    {
      $laporan = Laporan::all();
      $user = User::all();
      $rehabilitasi = Rehabilitasi::all();
    return View('pages.Dashboard.dashboard', compact('laporan','user','rehabilitasi'));
    }

  }
