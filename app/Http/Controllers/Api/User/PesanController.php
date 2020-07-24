<?php

namespace App\Http\Controllers\Api\User;
use App\Http\Controllers\FirebaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Laporan;
use FCM;


class PesanController extends Controller
{
    public function __construct(){
      $this->middleware('auth:user-api');
    }

    public function laporan(Request $request){
    $user = Auth::user();
    if($user->status){
      $rule = [
        'peran' => 'required',
        'nama' => 'required',
        'no_telp' => 'required|numeric|digits_between:10,13| unique:laporans',
        'jalan' => 'required',
        'desa' => 'required',
        'kecamatan' => 'required',
        'kota' => 'required',
        'jenis_narkoba' => 'required',
        'pekerjaan' => 'required|min:3',
        'kegiatan' => 'required',
        'tmpt_transaksi' => 'required'
      ];

      $message = [
        'required' => 'Isi bidang ini',
        // 'nama.min' => 'Nama terlalu pendek',
        // 'nama.max' => 'Nama terlalu panjang',
        // 'email.unique' => 'Email sudah terdaftar',
        // 'password.min' => 'Password Terlalu Pendek',
        'no_telp.unique' => 'No Telepon sudah terdaftar',
      //   'alamat.min' => 'Alamat terlalu pendek',
      //   'desa.min' => 'Nama desa terlalu pendek',
      //   'kecamatan.min' => 'Nama kecamatan terlalu pendek',
      //   'kecamatan.max' => 'Nama kecamatan terlalu panjang',
      //   'kode_pos.digits_between' => 'Kode Pos tidak benar',
       ];

      $this->validate($request, $rule, $message);

      $foto = $request->file('foto')->store('uploads/user');


      $alamat = $request->jalan.', '.$request->desa.', '.$request->kecamatan.', '.$request->kota;
      Laporan::create([
        'foto' =>$foto,
        'peran' => $request->peran,
        'nama' => $request->nama,
        'no_telp' => $request->no_telp,
        'alamat' => $alamat,
        'jenis_narkoba' => $request->jenis_narkoba,
        'pekerjaan' => $request->pekerjaan,
        'kendaraan'=>$request->kendaraan,
        'kegiatan' => $request->kegiatan,
        'tmpt_transaksi' => $request->tmpt_transaksi,
        'id_user' => $user->id
      ]);
      Auth::user()->sendNotifyKaryawan("laporan");

      return response()->json([
        'message' => 'success',
        'status' => true,
        'data' => (object) []
      ]);

    }else {
      return response()->json([
        'message' => 'Akun anda dinonaktifkan',
        'status' => false,
        'data' => (object) []
      ]);
    }
  }
  public function confirmed($id)
   {
       $laporan = Laporan::findOrFail($id);

       if ($laporan->status == '0'){
           return response()->json([
               'message' => 'Permintaan laporan tidak ditindak lanjuti, harap mengulang dengan jelas',
               'status' => false
           ]);
       }else{
           $laporan->update(['status' => '1']);
           $token = $laporan->user->fcm_token;
           $message = "Laporan anda telah sudah kami konfirmasi";
           $sendNotif = new FirebaseController();
           $sendNotif->sendNotificationFirebase($token, $message);

           return response()->json([
               'message' => 'successfully confirmed laporan',
               'status' => true,
               'data' => (object)[]
           ]);
       }
   }

}
