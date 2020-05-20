<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rehabilitasi;
use App\Narkotika;
use App\Psikotropika;
use App\Bhn_adiktif;
use App\Pencegahan;
use App\Hukum;
use App\Statistik;

class NarkobaController extends Controller
{
    public function rehabilitasi(){
      $rehabilitasi = Rehabilitasi::all();
      return response()->json([
        'message' => 'Berhasil',
        'status' => true,
        'data' => $rehabilitasi
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
    
}
