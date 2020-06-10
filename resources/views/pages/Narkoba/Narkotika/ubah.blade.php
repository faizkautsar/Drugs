@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Tambah Narkotika</h5>
   <p class="text-muted">Menginputkan narkotika</p>
    <form method="post" enctype="multipart/form-data" action="{{route('narkotika.update',$narkotika->id)}}">
      @csrf
      @method('PATCH')
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Nama Narkotika</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama narkotika" type="text" value="{{$narkotika->nama}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama') }}</b></p>
            </span>
          @endif
        </div>
      </div>


        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l13">Jenis Narkotika</label>
            <div class="col-md-9">
                <select class="form-control" name="jenis">
                    <option value="narkotika" @if($narkotika->jenis=='narkotika'){{"selected"}} @endif>Narkotika</option>
                    <option value="nss"@if($narkotika->jenis=='nss'){{"selected"}} @endif>Naroktika Semi Sensitis</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l13">Golongan Narkotika</label>
            <div class="col-md-9">
                <select class="form-control" name="golongan">
                    <option value="I" @if($narkotika->golongan=='I'){{"selected"}} @endif>Golongan I</option>
                    <option value="II" @if($narkotika->golongan=='II'){{"selected"}} @endif>Golongan II</option>
                    <option value="III" @if($narkotika->golongan=='III'){{"selected"}} @endif>Golongan III</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Dampak Narkotika</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('dampak')?'is-invalid':''}}"
                   name="dampak" id="basic-1" rows="3">{{$narkotika->dampak}}</textarea>
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
                   name="keterangan" rows="3" id="basic-2">{{$narkotika->keterangan}}</textarea>
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
              <input name="gambarlama" type="hidden" value="{{$narkotika->gambar}}">
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
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("narkotika.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
