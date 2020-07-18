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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin1.Karyawan.tmbh_karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'nama' => 'required',
        'tempat' => 'required',
        'tanggal' => 'required',
        'email' => 'required',
        'no_telp'=>'required',
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
        'password' =>'required',
        'no_telp'=>'required',
        'alamat' =>'required',

      ]);

      $karyawan = Narkotika::findOrFail($id);


      $karyawan->nama = $request->nama;
      $karyawan->ttl = $request->ttl;
      $karyawan->email = $request->email;
      $karyawan->password = $request->password;
      $karyawan->no_telp = $request->no_telp;
      $karyawan->alamat = $request->alamat ;
      $karyawan->update();


      return redirect()->route('karyawan.index');

    }

    public function destroy(cr $cr)
    {
        //
    }
}
