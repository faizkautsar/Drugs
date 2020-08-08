<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hukum;
use Auth;
class HukumController extends Controller
{
     public function _construct()
     {
       $this->middleware('auth:karyawan');
     }

    public function index()
    {
      $hukum = Hukum::all();
      return view('pages.Admin2.Hukum.dasarhukum', compact('hukum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin2.Hukum.masukan');
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
        'keterangan' => 'required|min:6',
        'isi' => 'required',
      ]);
      $hukum= new Hukum();
      $hukum->keterangan = $request->keterangan;
      $hukum->isi =$request->isi;
      $hukum->id_karyawan = Auth::guard('karyawan')->user()->id;
      $hukum->save();

      return redirect()->route('hukum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hukum = Hukum::find($id);
        return view('pages.Admin2.Hukum.ubah',compact('hukum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

                $this->validate($request,[
                  'keterangan' => 'required|min:6',
                  'isi' =>'required',
                ]);
                $hukum = Hukum::findOrFail($id);

                $hukum->keterangan =$request->keterangan;
                $hukum->isi =$request->isi;
                $hukum->id_karyawan = Auth::guard('karyawan')->user()->id;
                $hukum->update();

                return redirect()->route('hukum.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hukum = Hukum::findOrFail($id);
      $hukum->delete();
      return back()->with('success', 'berhasil menghapus data');

    }
}
