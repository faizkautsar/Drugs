<?php

namespace App\Http\Controllers;
use App\Laporan;
use Illuminate\Http\Request;

class PesanController extends Controller
{

     public function __construct(){
       $this->middleware('auth:admin');
     }

    public function laporan(){
      $laporan = Laporan::all();
      return view ('pages.Admin1.Lapor.pesan', compact('laporan'));
    }


    public function show($id)
    {
      $laporan = Laporan::find($id);
      return view ('pages.Admin1.Lapor.laporan', compact('laporan'));
    }

    public function update(Laporan $laporan)
    {
        $laporan->update(['status' => !$laporan->status]);
        return redirect()->route('laporan.index');
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect()->route('laporan.index');
    }
    public function pdf(){
      $laporan = Laporan::all();
      return view('pages.Admin1.Lapor.pdf', compact('laporan'));
    }
}
