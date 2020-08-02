<?php

namespace App\Http\Controllers;

use App\Rehabilitasi;
use Illuminate\Http\Request;

class RehabilitasiController extends Controller
{
  public function _construct()
  {
    $this->middleware('auth:karyawan');
  }
    public function index()
    {
     $rehabilitasi= Rehabilitasi::all();
     return view('pages.Admin2.Rehabilitasi.idx_rehabilitasi', compact('rehabilitasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.Admin2.Rehabilitasi.tambahkan');
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
            'nama_lengkap'=>'required|min:3|max:50',
            'rujukan'=> 'required'
          ]);

        $names = explode(" ", $request->nama_lengkap);
        $results = [];
        foreach ($names as $name) {
          $initial = substr($name, 0, 1);
          array_push($results, $initial);
        }
        $initial_implode = implode("", $results);

        $rehabilitasi = new Rehabilitasi();
        $rehabilitasi->inisial = $initial_implode;
        $rehabilitasi->nama_lengkap = $request->nama_lengkap;
        $rehabilitasi->tanggal_lahir = $request->tanggal_lahir;
        $rehabilitasi->alamat = $request->alamat;
        $rehabilitasi->keterangan = $request->keterangan;
        $rehabilitasi->pekerjaan = $request->pekerjaan;
        $rehabilitasi->rujukan = $request->rujukan;
        $rehabilitasi->save();


        return redirect()->route('rehabilitasi.index');

    }  /**
     * Display the specified resource.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function show(Rehabilitasi $rehabilitasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rehabilitasi = Rehabilitasi::find($id);
        return view ('pages.Admin2.Rehabilitasi.ubah', compact('rehabilitasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      {
          $this->validate($request,[
            'nama_lengkap'=>'required|min:3|max:50',
            'rujukan'=> 'required'
              ]);
          $rehabilitasi = Rehabilitasi::findOrFail($id);
          }

          $names = explode(" ", $request->nama_lengkap);
          $results = [];
          foreach ($names as $name) {
            $initial = substr($name, 0, 1);
            array_push($results, $initial);
          }

          $initial_implode = implode("", $results);


          $rehabilitasi->inisial = $initial_implode;
          $rehabilitasi->nama_lengkap = $request->nama_lengkap;
          $rehabilitasi->tanggal_lahir = $request->tanggal_lahir;
          $rehabilitasi->alamat = $request->alamat;
          $rehabilitasi->keterangan = $request->keterangan;
          $rehabilitasi->pekerjaan = $request->pekerjaan;
          $rehabilitasi->rujukan = $request->rujukan;
          $rehabilitasi->update();


          return redirect()->route('rehabilitasi.index')->with('message', 'Sukses!');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rehabilitasi  $rehabilitasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $rehabilitasi = Rehabilitasi::findOrFail($id);
      $rehabilitasi ->delete();
      return redirect()->route('rehabilitasi.index');

    }
}
