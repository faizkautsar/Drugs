<?php

namespace App\Http\Controllers;
use App\Laporan;
use Illuminate\Http\Request;
use PDF;

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
      return view ('pages.Admin1.Lapor.detail', compact('laporan'));
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

      $tanggal_mulai = request()->get('tanggal_mulai');
      $tanggal_selesai = request()->get('tanggal_selesai');

      if($tanggal_mulai && $tanggal_selesai){
        $laporan = Laporan::whereBetween('created_at', [$tanggal_mulai,$tanggal_selesai])->get();
      }elseif ($tanggal_mulai) {
        $laporan = Laporan::whereDate('created_at', $tanggal_mulai)->get();
      }

      $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
      ->loadview('pages.Admin1.Lapor.pdf',['laporan'=>$laporan]);
      return $pdf->stream();
      // return $pdf->download('laporan-pdf');
      // return view('pages.Admin1.Lapor.pdf', compact('laporan'));
    }


  }
