@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Dampak bagi kesehatan Tubuh Manusia </h5>
   <p class="text-muted"></p>
    <form method="post" enctype="multipart/form-data" action="{{route('dampak.update',$bahaya->id)}}">
      @csrf
      @method('PATCH')
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Anggota Tubuh</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('tubuh')?'is-invalid':''}}"
          name="tubuh" placeholder="anggota-tubuh" type="text" value="{{$bahaya->tubuh}}">
          @if ($errors->has('tubuh'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('tubuh') }}</b></p>
            </span>
          @endif
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Keterangan</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
                   name="keterangan" rows="3" id="basic-2">{{$bahaya->keterangan}}</textarea>
                @if ($errors->has('keterangan'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('keterangan') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Bahaya</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('bahaya')?'is-invalid':''}}"
                   name="bahaya" id="basic-1" rows="3">{{$bahaya->bahaya}}</textarea>
                @if ($errors->has('bahaya'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('bahaya') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l16">File input</label>
            <div class="col-md-9">
              <input name="gambarlama" type="hidden" value="{{$bahaya->gambar}}">
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
                    <button type="button" onclick="window.location='{{route("dampak.index")}}'"
                     class="btn btn-danger btn-rounded" name="button">Kembali</button>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
