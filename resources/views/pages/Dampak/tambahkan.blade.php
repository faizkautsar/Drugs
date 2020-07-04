@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Dampak Negatif Narkoba</h5>
   <p class="text-muted">Dampak Negatif</p>
    <form method="post" enctype="multipart/form-data" action="{{route('dampak.store')}}">
      @csrf

        <div class="form-group row">
           <label class="col-md-3 col-form-label" for="l0">Keterangan</label>
           <div class="col-md-9">
             <input class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
             name="keterangan" placeholder="keterangan" type="text"  value="{{old('keterangan')}}">
             @if ($errors->has('keterangan'))
               <span class="invalid-feedback" role="alert">
                 <p><b>{{ $errors->first('keterangan') }}</b></p>
               </span>
             @endif
           </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l16">File input</label>
            <div class="col-md-9">
              <input name="gambar" type="file" class="form-control {{$errors->has('gambar')?'is-invalid':''}}"
              value="{{old('gambar')}}">
                @if ($errors->has('gambar'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('gambar') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("dampak.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
