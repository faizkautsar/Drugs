<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hukum;
class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hukum = Hukum::all();
      return view('pages.Hukum.dasarhukum', compact('hukum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Hukum.masukan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $hukum= new Hukum();
      $hukum->keterangan = $request->keterangan;
      $hukum->isi =$request->isi;
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
        return view('pages.Hukum.ubah',compact('hukum'));
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
                  'keterangan' => 'required',
                  'isi' =>'required',
                ]);
                $hukum = Hukum::findOrFail($id);

                $hukum->keterangan =$request->keterangan;
                $hukum->isi =$request->isi;
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
      return redirect()->route('hukum.index');

    }
}
