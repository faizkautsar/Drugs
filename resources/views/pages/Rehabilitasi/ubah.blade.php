@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Edit Bahan Adiktif</h5>
   <p class="text-muted">Mengubah Bahan Adiktif</p>
    <form method="post" enctype="multipart/form-data" action="{{route('rehabilitasi.update',$rehabilitasi->id)}}">
      @csrf
      @method('PATCH')
      <div class="form-group row">
         <label class="col-md-3 col-form-label" for="l0">Nama Lengkap</label>
         <div class="col-md-9">
           <input class="form-control {{$errors->has('nama_lengkap')?'is-invalid':''}}"
           name="nama_lengkap" placeholder="Nama Lengkap" type="text" value="{{$rehabilitasi->nama_lengkap}}">
           @if ($errors->has('nama_lengkap'))
             <span class="invalid-feedback" role="alert">
               <p><b>{{ $errors->first('nama_lengkap') }}</b></p>
             </span>
           @endif
         </div>
       </div>
      <div class="form-group row">
         <label class="col-md-3 col-form-label" for="l0">Tanggal Lahir</label>
         <div class="col-md-9">
           <input class="form-control "
           name="tanggal_lahir" type="date" value="{{$rehabilitasi->tanggal_lahir}}">
           </div>
       </div>
        <div class="form-group row">
           <label class="col-md-3 col-form-label" for="l0">Alamat</label>
           <div class="col-md-9">
             <textarea class="form-control "
             name="alamat" placeholder="alamat" type="text" value="{{$rehabilitasi->alamat}}">
           </textarea>
           </div>
         </div>
         <div class="form-group row">
            <label class="col-md-3 col-form-label" for="l0">Keterangan</label>
            <div class="col-md-9">
              <input class="form-control "
              name="keterangan" placeholder="keterangan" type="text" value="{{$rehabilitasi->keterangan}}">
            </div>
          </div>
         <div class="form-group row">
            <label class="col-md-3 col-form-label" for="l0">Pekerjaan</label>
            <div class="col-md-9">
              <input class="form-control "
              name="pekerjaan" placeholder="pekerjaan" type="text" value="{{$rehabilitasi->pekerjaan}}">
            </div>
          </div>

       <div class="form-group row">
          <label class="col-md-3 col-form-label" for="l0">Rujukan</label>
          <div class="col-md-9">
            <input class="form-control {{$errors->has('rujukan')?'is-invalid':''}}"
            name="rujukan" placeholder="rujukan-dari" type="text"
            value="{{$rehabilitasi->rujukan}}">
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
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("rehabilitasi.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Batal</a>
                    <button type="button" onclick="window.location='{{route("rehabilitasi.index")}}'"
                     class="btn btn-danger btn-rounded" name="button">Kembali</button>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
