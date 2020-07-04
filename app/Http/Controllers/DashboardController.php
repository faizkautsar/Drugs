<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
class DashboardController extends Controller
{
  public function _construct()
  {
    $this->middleware('auth');
  }

    public function index()

    {
      $laporan = Laporan::all();
    return View('pages.Dashboard.dashboard', compact('laporan'));
    }
    public function laporan()
{
    $laporan = Laporan::all();
    return view ('pages.Lapor.pesan', compact('laporan'));
}

}
