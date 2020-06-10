@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Tambah Narkotika</h5>
   <p class="text-muted">Menginputkan narkotika</p>
    <form method="post" enctype="multipart/form-data" action="{{route('ps.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Psikotropika</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama psikotropika" type="text" value="{{old('nama')}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama') }}</b></p>
            </span>
          @endif
        </div>
      </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l13">Golongan Psikotropika</label>
            <div class="col-md-9">
                <select class="form-control" name="golongan">
                    <option>Golongan I</option>
                    <option>Golongan II</option>
                    <option>Golongan III</option>
                    <option>Golongan IV</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Dampak Psikotropika</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('dampak')?'is-invalid':''}}"
                   name="dampak" id="basic-1" rows="3">{{old('dampak')}}</textarea>
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
                   name="keterangan" id="basic-2" rows="3">{{old('katerangan')}}</textarea>
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
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("ps.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
