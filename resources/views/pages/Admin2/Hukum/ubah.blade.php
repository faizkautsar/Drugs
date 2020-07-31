@extends('templates.admin2')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Hukum </h5>
   <p class="text-muted"> Form Edit dalam hukum yang diatur UU no 35. Tahun 2009 </p>
    <form method="post" enctype="multipart/form-data" action="{{route('hukum.update',$hukum->id)}}">
      @csrf
      @method('PATCH')

        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Keterangan</label>
            <div class="col-md-9">
                <input class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
                   name="keterangan" rows="3" value="{{$hukum->keterangan}}" >
                @if ($errors->has('keterangan'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('keterangan') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Isi</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('isi')?'is-invalid':''}}"
                   name="isi" id="basic-1" rows="3">{{$hukum->isi}}</textarea>
                @if ($errors->has('isi'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('isi') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
  <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <a type="button" onclick="return confirm('Apakah anda yakin untuk membatalkannya?')" href="{{route("hukum.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
