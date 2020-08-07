<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

     public function __construct(){
       $this->middleware('auth:admin');
     }

    public function index()
    {
        $karyawan = Karyawan::all();
        return view('pages.Admin1.Karyawan.karyawan', compact('karyawan'));
    }

    public function create()
    {
        return view('pages.Admin1.Karyawan.tmbh_karyawan');
    }
    public function store(Request $request)
    {
      $this->validate($request,[
        'nama' => 'required',
        'tempat' => 'required',
        'tanggal' => 'required',
        'email' => 'required|email|unique:karyawans',
        'no_telp'=>'required|unique:karyawans|numeric|digits_between:11,13',
        'alamat' =>'required',
       ]);

       $time = strtotime($request->tanggal);
       $password = date('dmY',$time);
       $tanggal = date('d-m-Y',$time);


        $karyawan = new Karyawan();
        $karyawan->nama = $request->nama;
        $karyawan->ttl = $request->tempat.','.$tanggal;
        $karyawan->email= $request->email;
        $karyawan->password= bcrypt($password);;
        $karyawan->no_telp= $request->no_telp;
        $karyawan->alamat = $request->alamat;
        $karyawan->save();

        return redirect()->route("karyawan.index");
    }

    public function edit($id)
    {
      $karyawan = Karyawan::findOrFail($id);
        return view('pages.Admin1.Karyawan.ubah_karyawan', compact('karyawan'));

    }

    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'nama' => 'required',
        'ttl' => 'required',
        'email' => 'required',
        'no_telp'=>'required|numeric|digits_between:11,13',
        'alamat' =>'required',

      ]);
      $time = strtotime($request->tanggal);
      $password = date('dmY',$time);
      $tanggal = date('d-m-Y',$time);


      $karyawan = Karyawan::findOrFail($id);
      $karyawan->nama = $request->nama;
      $karyawan->ttl = $request->ttl;
      $karyawan->email = $request->email;
      $karyawan->password=bcrypt($password);
      $karyawan->no_telp = $request->no_telp;
      $karyawan->alamat = $request->alamat ;
      $karyawan->update();


      return redirect()->route('karyawan.index');

    }
    public function cekin (Karyawan $karyawan){
      $karyawan->update(['status' => !$karyawan->status]);
      return redirect()->back();
    }
}
