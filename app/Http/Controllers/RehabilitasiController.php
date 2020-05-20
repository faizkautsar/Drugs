<?php

namespace App\Http\Controllers;

use App\Rehabilitasi;
use Illuminate\Http\Request;

class RehabilitasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $rehabilitasi= Rehabilitasi::all();
     return view('pages.Rehabilitasi.idx_rehabilitasi', compact('rehabilitasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('pages.Rehabilitasi.tambahkan');
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
            'nama'=>'required',
            'umur'=> 'required|max:2',
            'rujukan'=> 'required'
          ]);

        $rehabilitasi = new Rehabilitasi();
        $rehabilitasi->nama = $request->nama;
        $rehabilitasi->umur = $request->umur;
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
        return view ('pages.Rehabilitasi.ubah', compact('rehabilitasi'));
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
            'nama'=>'required',
            'umur'=> 'required|max:2',
            'rujukan'=> 'required'
              ]);
          $rehabilitasi = Rehabilitasi::findOrFail($id);
          }

          $rehabilitasi->nama = $request->nama;
          $rehabilitasi->umur = $request->umur;
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
