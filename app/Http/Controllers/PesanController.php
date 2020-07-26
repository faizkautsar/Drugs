<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FirebaseController;
use App\Laporan;
use Illuminate\Http\Request;
use PDF;
use App\User;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class PesanController extends Controller
{

  public function _construct()
  {
    $this->middleware('guest:karyawan')->except('logout');
  }
    public function laporan(){

      $laporan = Laporan::all();
      return view ('pages.Admin2.Lapor.pesan', compact('laporan'));
    }


    public function show($id)
    {
      $laporan = Laporan::find($id);
      return view ('pages.Admin2.Lapor.detail', compact('laporan'));
    }

    public function notifyLaporan(){
      $laporan = Laporan::with('user')->orderBy('created_at', 'DESC')->take(4)->get();
      // dd($laporan);
      return $laporan;
      // return view ('pages.Admin2.Lapor.pesan', compact('laporan'));
    }

    public function update(Laporan $laporan)
    {
        $laporan->update(['status' => !$laporan->status]);

        $token = $laporan->user->fcm_token;
        $message = "Terimakasih atas partisipasi anda dalam memberantas narkoba.
                    Laporan telah di konfirmasi";

        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder('no-drugs');
        $notificationBuilder->setBody($message)->setSound('default');

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['a_data' => 'my_data']);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();

        $data = $dataBuilder->build();
        FCM::sendTo($token, $option, $notification, $data);

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
      ->loadview('pages.Admin2.Lapor.pdf',['laporan'=>$laporan]);
      return $pdf->stream();
        // return $pdf->download('laporan-pdf');
      // return view('pages.Admin2.Lapor.pdf', compact('laporan'));
    }


  }
