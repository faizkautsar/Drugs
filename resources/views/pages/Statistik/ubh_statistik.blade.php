@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Mengubah data berdasarkan BNN.go.id </h5>
   <p class="text-muted">Mengubah data statitik yang ada di Indonesia</p>
    <form method="post" enctype="multipart/form-data" action="{{route('statistik.update',$statistik->id)}}">
      @csrf
      @method('PATCH')
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Daerah</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('daerah')?'is-invalid':''}}"
          name="daerah" placeholder="nama" type="text" value="{{$statistik->daerah}}">
          @if ($errors->has('daerah'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('daerah') }}</b></p>
            </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Kasus</label>
            <div class="col-md-9">
                <input class="form-control {{$errors->has('kasus')?'is-invalid':''}}"
                 value="{{$statistik->kasus}}"
                   name="kasus" placeholder="Jumlah" type="tel" maxlength="6">
                   @if ($errors->has('kasus'))
                     <span class="invalid-feedback" role="alert">
                       <p><b>{{ $errors->first('kasus') }}</b></p>
                     </span>
                   @endif
                </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Tersangka</label>
            <div class="col-md-9">
                <input class="form-control {{$errors->has('tersangka')?'is-invalid':''}}"
                 value="{{$statistik->tersangka}}"
                   name="tersangka" placeholder="Jumlah" type="tel" maxlength="6">
                   @if ($errors->has('tersangka'))
                     <span class="invalid-feedback" role="alert">
                       <p><b>{{ $errors->first('tersangka') }}</b></p>
                     </span>
                   @endif
                </div>
        </div>        <div class="form-group row">
                    <label class="col-md-3 col-form-label"  for="l15">Pasien</label>
                    <div class="col-md-9">
                        <input class="form-control {{$errors->has('pasien')?'is-invalid':''}}"
                         value="{{$statistik->pasien}}"
                           name="pasien" placeholder="Jumlah" type="tel" maxlength="6">
                           @if ($errors->has('pasien'))
                             <span class="invalid-feedback" role="alert">
                               <p><b>{{ $errors->first('pasien') }}</b></p>
                             </span>
                           @endif
                        </div>
                </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <<a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("statistik.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
