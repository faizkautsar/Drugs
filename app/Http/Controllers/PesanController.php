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


    public function laporan_pdf()
    {
      global $laporan;
        $laporan = Laporan::where('created_at','true')->orderBy('updated_at','DESC')->paginate(20);
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
        if ($start_date !="" && $end_date !="") {
            # code...
            $laporan=Laporan::whereBetween('updated_at',[$start_date,$end_date])->orderBy('updated_at','DESC')->where('created_at','1')->paginate(20);
            $start_date = \Carbon\Carbon::parse($start_date)->format('d-F-Y');
            $end_date = \Carbon\Carbon::parse($end_date)->format('d-F-Y');

        }
        // $pdf =PDF::loadview('report_data.data_pdf',compact('report_data'));
        // return $pdf->stream();
        return view('pages.Admin1.Lapor.pilih_pdf',compact('laporan','start_date','end_date'));
    }
}
