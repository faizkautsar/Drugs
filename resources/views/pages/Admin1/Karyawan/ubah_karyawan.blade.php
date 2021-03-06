@extends('templates.admin1')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Edit Karyawan</h5>
   <p class="text-muted">Mengubah Karyawan</p>
    <form method="post" enctype="multipart/form-data" action="{{route('karyawan.update',$karyawan->id)}}">
      @csrf
      @method('PATCH')
      <div class="form-group row">
         <label class="col-md-3 col-form-label" for="l0">Nama</label>
         <div class="col-md-9">
           <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
           name="nama" placeholder="Nama " type="text" value="{{$karyawan->nama}}">
           @if ($errors->has('nama'))
             <span class="invalid-feedback" role="alert">
               <p><b>{{ $errors->first('nama') }}</b></p>
             </span>
           @endif
         </div>
       </div>
      <div class="form-group row">
         <label class="col-md-3 col-form-label" for="l0">Tempat Tanggal Lahir</label>
         <div class="col-md-9">
           <input class="form-control "
           name="ttl" type="text" value="{{$karyawan->ttl}}">
           </div>
       </div>
       <div class="form-group row">
          <label class="col-md-3 col-form-label" for="l0">Email</label>
          <div class="col-md-9">
            <input class="form-control "
            name="email" type="email" value="{{$karyawan->email}}">
            </div>
        </div>
        <div class="form-group row">
           <label class="col-md-3 col-form-label" for="l0">No Telepon</label>
           <div class="col-md-9">
             <input class="form-control {{$errors->has('no_telp')?'is-invalid':''}}"
             name="no_telp"  type="numeric" value="{{$karyawan->no_telp}}">
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
             <input class="form-control {{$errors->has('alamat')?'is-invalid':''}}"
             name="alamat"  type="numeric" value="{{$karyawan->alamat}}">
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
                    <a type="button" onclick="return confirm('Apakah anda yakin untuk membatalkannya?')" href="{{route("karyawan.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                    </div>
            </div>
        </div>
        </form>
        </div>
@endsection
