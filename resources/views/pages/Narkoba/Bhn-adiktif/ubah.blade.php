@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Edit Bahan Adiktif</h5>
   <p class="text-muted">Mengubah Bahan Adiktif</p>
    <form method="post" enctype="multipart/form-data" action="{{route('bhn_adiktif.update',$bhn_adiktif->id)}}">
      @csrf
      @method('PATCH')
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Bahan Adiktif</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama BahanAdiktif" type="text" value="{{$bhn_adiktif->nama}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama') }}</b></p>
            </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Efek</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('dampak')?'is-invalid':''}}"
                   name="dampak" id="basic-1" rows="3">{{$bhn_adiktif->dampak}}</textarea>
                @if ($errors->has('dampak'))
                  <span class="invalid-feedback" role="alert">
                    <p><b>{{ $errors->first('dampak') }}</b></p>
                  </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Keterangan</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
                   name="keterangan" id="basic-2" rows="3">{{$bhn_adiktif->keterangan}}</textarea>
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
              <input name="gambarlama" type="hidden" value="{{$bhn_adiktif->gambar}}">
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

                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
