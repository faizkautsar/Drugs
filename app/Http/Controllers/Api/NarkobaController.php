<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rehabilitasi;
use App\Narkotika;
use App\Psikotropika;
use App\Bhn_adiktif;
use App\Pencegahan;
use App\Bahaya;
use App\Hukum;
use App\Statistik;
use Carbon\Carbon;

class NarkobaController extends Controller
{
    public function rehabilitasi(){
      $rehabilitasi = Rehabilitasi::all();

      $results = [];
      foreach ($rehabilitasi as $value) {
          $results[] = [
            'id' => $value->id,
            "inisial" => $value->inisial,
            "nama_lengkap" =>  $value->nama_lengkap,
            "tanggal_lahir" => $value->tanggal_lahir,
            "umur"  => Carbon::parse($value->tanggal_lahir)->age,
            "alamat" => $value->alamat,
            "keterangan" => $value->keterangan,
            "pekerjaan" => $value->pekerjaan,
            "rujukan" => $value->rujukan
          ];
      }


    return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $results
      ]);
    }

    public function narkotika(){
      $narkotika = Narkotika::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $narkotika
      ]);
    }

    public function psikotropika(){
      $psikotropika = Psikotropika::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $psikotropika
      ]);
    }
    public function bhn_adiktif(){
      $bhn_adiktif = Bhn_adiktif::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $bhn_adiktif
      ]);
    }

    public function pencegahan() {
      $pencegahan = Pencegahan::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $pencegahan
      ]);
    }

    public function hukum() {
      $hukum = Hukum::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $hukum
      ]);
    }

    public function statistik() {
      $statistik = Statistik::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $statistik
      ]);
    }

    public function bahaya() {
      $bahaya = Bahaya::all();

      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $bahaya
      ]);
    }
}
