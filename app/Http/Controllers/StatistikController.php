<?php

namespace App\Http\Controllers;
use App\Statistik;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statistik = Statistik::all();
        return view ('pages.Statistik.statistik', compact('statistik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Statistik.tbh_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statistik = new Statistik();
        $statistik->daerah = $request->daerah;
        $statistik->kasus = $request->kasus;
        $statistik->tersangka = $request->tersangka;
        $statistik->pasien = $request->pasien;
        $statistik->save();

        return redirect()->route('statistik.index');
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
      $statistik = Statistik::find($id);
      return view('pages.Statistik.ubh_statistik', compact('statistik'));
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
      {
          $this->validate($request,[
            'daerah'=>'required',
            'kasus'=> 'required|max:6',
            'tersangka'=> 'required|max:6',
            'pasien'=> 'required|max:6',
              ]);
          $statistik = Statistik::findOrFail($id);
          }

          $statistik->daerah = $request->daerah;
          $statistik->kasus = $request->kasus;
          $statistik->tersangka = $request->tersangka;
          $statistik->pasien = $request -> pasien;
          $statistik->update();


          return redirect()->route('statistik.index')->with('message', 'Sukses!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $statistik = Statistik::findOrFail($id);
      $statistik ->delete();
      return redirect()->route('statistik.index');

    }
}
