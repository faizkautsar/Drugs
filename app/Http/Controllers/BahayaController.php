<?php

namespace App\Http\Controllers;

use App\Bahaya;
use Illuminate\Http\Request;

class BahayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahaya = Bahaya::all();
        return view('pages.Dampak.dampak', compact('bahaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Dampak.tambahkan');

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
          'keterangan'=>'required',
          'gambar'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $filename = time().'.'. $gambar->getClientOriginalExtension();
        $tempatfile = public_path('uploads/narkoba/dampak');
        $gambar->move($tempatfile, $filename);

        $bahaya = new Bahaya();
        $bahaya->keterangan = $request->keterangan;
        $bahaya->gambar = $filename;
        $bahaya->save();

        return redirect()->route('dampak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $bahaya = Bahaya::find($id);
      return view ('pages.Dampak.lihat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahaya = Bahaya::find($id);
        return view('pages.Dampak.ubah', compact('bahaya'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

          $this->validate($request,[
            'keterangan' => 'required',
            'gambar' =>'image|mimes:jpg,png,jpeg|max:2048',
          ]);
          $bahaya = Bahaya::findOrFail($id);

          $filename = $bahaya->gambar;

          if ($request->gambar) {
            $gambar = $request->file('gambar');
            $filename = time().'.'.$gambar->getClientOriginalExtension();
            $tempatfile =public_path('uploads/narkoba/dampak');
            $gambar->move($tempatfile , $filename);

          }

          $bahaya->keterangan =$request->keterangan;
          $bahaya->gambar = $filename;
          $bahaya->update();

          return redirect()->route('dampak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bahaya  $bahaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bahaya $bahaya)
    {

          $bahaya = Bahaya::findOrFail($id);
          $bahaya->delete();
          return redirect()->route('dampak.index');

    }
}
