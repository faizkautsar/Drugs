@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Menambakan  Rehabilitasi</h5>
   <p class="text-muted">Berdasarkan data rehabilitasi</p>
    <form method="post" enctype="multipart/form-data"
    action="{{route('rehabilitasi.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Nama</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama" type="text" value="{{old('nama')}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama') }}</b></p>
            </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Umur</label>
            <div class="col-md-9">
                <input class="form-control {{$errors->has('umur')?'is-invalid':''}}"
                 value="{{old('umur')}}"
                   name="umur" placeholder="Usia" type="tel" maxlength="2">
                   @if ($errors->has('umur'))
                     <span class="invalid-feedback" role="alert">
                       <p><b>{{ $errors->first('umur') }}</b></p>
                     </span>
                   @endif
                </div>
        </div>

       <div class="form-group row">
          <label class="col-md-3 col-form-label" for="l0">Rujukan</label>
          <div class="col-md-9">
            <input class="form-control {{$errors->has('rujukan')?'is-invalid':''}}"
            name="rujukan" placeholder="rujukan-dari" type="text" value="{{old('rujukan')}}">
            @if ($errors->has('rujukan'))
              <span class="invalid-feedback" role="alert">
                <p><b>{{ $errors->first('rujukan') }}</b></p>
              </span>
            @endif
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
