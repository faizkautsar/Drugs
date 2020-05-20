@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Menambahkan Data Rehabilitasi</h5>
   <p class="text-muted">Data</p>
    <form method="post" enctype="multipart/form-data" action="{{route('statistik.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Daerah</label>
        <div class="col-md-9">
          <input class="form-control "
          name="daerah" placeholder="daerah" type="text" >
          </div>
      </div>
     <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l0">Kasus</label>
              <div class="col-md-9">
                <input class="form-control "
                name="kasus" placeholder="kasus" type="text">
                </div>
          </div>
          <div class="form-group row">
             <label class="col-md-3 col-form-label" for="l0">Tersangka</label>
             <div class="col-md-9">
               <input class="form-control "
               name="tersangka" placeholder="tersangka" type="text" >
               </div>
           </div>
           <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l0">Pasien</label>
              <div class="col-md-9">
                <input class="form-control "
                name="pasien" placeholder="pasien" type="text" >
              </div>
            </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
