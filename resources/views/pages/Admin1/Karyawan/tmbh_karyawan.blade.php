@extends('templates.admin1')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Tambah Kariyawan</h5>
   <p class="text-muted">Menambahkan Kariyawan</p>
    <form method="post" enctype="multipart/form-data" action="{{route('karyawan.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Nama</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama karyawan" type="text" value="{{old('nama')}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama') }}</b></p>
            </span>
          @endif
        </div>
      </div>

     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Tempat Tanggal Lahir</label>
        <div class="col-md-3">
          <input class="form-control {{$errors->has('tempat')?'is-invalid':''}}"
          name="tempat" placeholder="Tempat" type="text" value="{{old('tempat')}}">
          @if ($errors->has('tempat'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('tempat') }}</b></p>
            </span>
          @endif
        </div>
        <div class="col-md-3">
          <input class="form-control {{$errors->has('tanggal')?'is-invalid':''}}"
          name="tanggal" placeholder="Tanggal Lahir" type="date" value="{{old('tanggal')}}">
          @if ($errors->has('tanggal'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('tanggal') }}</b></p>
            </span>
          @endif
        </div>
      </div>


      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Email</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('email')?'is-invalid':''}}"
          name="email" placeholder="Email" type="text" value="{{old('email')}}">
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('email') }}</b></p>
            </span>
          @endif
        </div>
      </div>

     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">No Telepon</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('no_telp')?'is-invalid':''}}"
          name="no_telp" placeholder="no_telp" type="text" value="{{old('no_telp')}}">
          @if ($errors->has('no_telp'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('no_telp') }}</b></p>
            </span>
          @endif
        </div>
      </div>

     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Alamat</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="alamat" placeholder="alamat" type="text" value="{{old('alamat')}}">
          @if ($errors->has('alamat'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('alamat') }}</b></p>
            </span>
          @endif
        </div>
      </div>

        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("karyawan.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
