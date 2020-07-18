<?php

namespace App\Http\Controllers;

use App\Bhn_adiktif;
use Illuminate\Http\Request;

class BhnAdiktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function _construct()
     {
       $this->middleware('guest:karyawan')->except('logout');
     }


    public function index()
    {
      $bhn_adiktif = Bhn_adiktif::all();
      return view ('pages.Admin2.Narkoba.Bhn-adiktif.bhn-adiktif', compact('bhn_adiktif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin2.Narkoba.Bhn-adiktif.tambah');
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
          'nama'=> 'required',
          'dampak'=> 'required',
          'keterangan' => 'required',
          'gambar' =>'required|image|mimes:jpg,png,jpeg|max:2048',

        ]);
        $gambar = $request->file('gambar');
        $namafile = time().'.'. $gambar->getClientOriginalExtension();
        $tempatfile = public_path('uploads/narkoba/BahanAdiktif');
        $gambar->move($tempatfile, $namafile);

        $bhn_adiktif = new Bhn_adiktif();
        $bhn_adiktif->nama = $request->nama;
        $bhn_adiktif->dampak = $request->dampak;
        $bhn_adiktif->keterangan = $request->keterangan;
        $bhn_adiktif->gambar = $namafile;
        $bhn_adiktif->save();

        return redirect()->route('bhn_adiktif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bhn_adiktif  $bhn_adiktif
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $bhn_adiktif = Bhn_adiktif::find($id);
        return View('pages.Admin2.Narkoba.Bhn-adiktif.lihat',compact('bhn_adiktif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bhn_adiktif  $bhn_adiktif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bhn_adiktif = Bhn_adiktif::findOrFail($id);
        return view('pages.Admin2.Narkoba.Bhn-adiktif.ubah', compact('bhn_adiktif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bhn_adiktif  $bhn_adiktif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'nama' =>'required',
          'dampak' => 'required',
          'keterangan' => 'required',
          'gambar' =>'image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $bhn_adiktif = Bhn_adiktif::findOrFail($id);

        $namafile = $bhn_adiktif->gambar;

        if ($request->gambar) {
          $gambar = $request->file('gambar');
          $namafile = time().'.'.$gambar->getClientOriginalExtension();
          $tempatfile =public_path('uploads/narkoba/BahanAdiktif');
          $gambar->move($tempatfile,$namafile);

        }

        $bhn_adiktif->nama = $request->nama;
        $bhn_adiktif->dampak =$request->dampak;
        $bhn_adiktif->keterangan =$request->keterangan;
        $bhn_adiktif->gambar = $namafile;
        $bhn_adiktif->update();

        return redirect()->route('bhn_adiktif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bhn_adiktif  $bhn_adiktif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bhn_adiktif= Bhn_adiktif::findOrFail($id);
        $bhn_adiktif->delete();
        return redirect()->route('bhn_adiktif.index');
    }
}
