<?php

namespace App\Http\Controllers;

use App\Psikotropika;
use Illuminate\Http\Request;
use Auth;
class PsikotropikaController extends Controller
{

  public function _construct()
  {
    $this->middleware('auth:karyawan');

  }
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $psikotropika = Psikotropika::all();
        return View('pages.Admin2.Narkoba.Psikotropika.ps-index', compact('psikotropika'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin2.Narkoba.Psikotropika.ps-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $this->validate($request,[
          'nama'=>'required|unique:psikotropikas',
          'dampak'=>'required',
          'keterangan'=>'required',
          'gambar'=>'required|image|mimes:jpg,png,jpeg|max:2048|unique:psikotropikas',
        ]);

        $gambar = $request->file('gambar');
        $filename = time().'.'.$gambar->getClientOriginalExtension();
        $tempatfile = public_path('uploads/narkoba/psikotropika');
        $gambar->move($tempatfile, $filename);

        $psikotropika = new Psikotropika();
        $psikotropika->nama = $request->nama;
        $psikotropika->golongan = $request->golongan;
        $psikotropika->dampak = $request->dampak;
        $psikotropika->keterangan = $request->keterangan;
        $psikotropika->gambar = $filename;
        $psikotropika->id_karyawan = Auth::guard('karyawan')->user()->id;
        $psikotropika->save();

        return redirect()->route('ps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Psikotropika  $psikotropika
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $psikotropika = Psikotropika::find($id);
      return view ('pages.Admin2.Narkoba.Psikotropika.ps-lihat', compact('psikotropika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Psikotropika  $psikotropika
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psikotropika = Psikotropika::findOrFail($id);
        return view('pages.Admin2.Narkoba.Psikotropika.ps-ubah', compact('psikotropika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psikotropika  $psikotropika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'nama'=>'required',
          'dampak'=> 'required',
          'keterangan'=>'required',
          'gambar'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $psikotropika = Psikotropika::findOrFail($id);

        $filename=$psikotropika->gambar;

        if ($request->gambar) {

          $gambar = $request->file('gambar');
          $filename = time().'.'.$gambar->getClientOriginalExtension();
          $tempatfile = public_path('uploads/narkoba/psikotropika');
          $gambar->move($tempatfile, $filename);

        }

        $psikotropika->nama = $request->nama;
        $psikotropika->golongan = $request->golongan;
        $psikotropika->dampak = $request->dampak;
        $psikotropika->keterangan = $request->keterangan;
        $psikotropika->gambar = $filename;
        $psikotropika->id_karyawan = Auth::guard('karyawan')->user()->id;
        $psikotropika->update();


        return redirect()->route('ps.index')->with('message', 'Sukses!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psikotropika  $psikotropika
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $psikotropika = Psikotropika::findOrFail($id);
     $psikotropika ->delete();
     return redirect()->route('ps.index');
    }
}
