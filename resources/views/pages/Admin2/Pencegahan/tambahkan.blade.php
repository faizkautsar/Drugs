@extends('templates.admin2')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Pencegahan</h5>
   <b class="text-muted">Upaya Pencegahan Narkoba</b>
    <form method="post" enctype="multipart/form-data" action="{{route('pencegahan.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Aspek</label>
        <div class="col-md-9">
          <input class="form-control" name="aspek"  placeholder="Aspek" >
          </div>
      </div>

      <div class="form-group row">
          <label class="col-md-3 col-form-label"  for="l15">Keterangan</label>
          <div class="col-md-9">
              <textarea class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
                 name="keterangan" id="basic-1" rows="3"></textarea>
              @if ($errors->has('keterangan'))
                <span class="invalid-feedback" role="alert">
                  <p><b>{{ $errors->first('keterangan') }}</b></p>
                </span>
              @endif
          </div>
      </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("pencegahan.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
