@extends('templates.admin2')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Form Ubah Psikotropika</h5>
   <p class="text-muted">Mengubah Psikotropika</p>
    <form method="post" enctype="multipart/form-data" action="{{route('ps.update', $psikotropika->id)}}">
      @csrf
      @method('PATCH')

     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Psikotropika</label>
        <div class="col-md-9">
          <input class="form-control {{$errors->has('nama')?'is-invalid':''}}"
          name="nama" placeholder="nama psikotropika" type="text" value="{{$psikotropika->nama}}">
          @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <p><b>{{ $errors->first('nama')}}</b></p>
            </span>
          @endif
        </div>
      </div>
      <div class="form-group row">
          <label class="col-md-3 col-form-label"  for="l13">Golongan Narkotika</label>
          <div class="col-md-9">
              <select class="form-control" name="golongan">
                  <option value="I" @if($psikotropika->golongan=='I'){{"selected"}} @endif>Golongan I</option>
                  <option value="II" @if($psikotropika->golongan=='II'){{"selected"}} @endif>Golongan II</option>
                  <option value="III" @if($psikotropika->golongan=='III'){{"selected"}} @endif>Golongan III</option>
                  <option value="IV" @if($psikotropika->golongan=='IV'){{"selected"}} @endif>Golongan IV</option>

              </select>
          </div>
      </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"  for="l15">Dampak</label>
            <div class="col-md-9">
                <textarea class="form-control {{$errors->has('dampak')?'is-invalid':''}}"
                   name="dampak" id="basic-1" rows="3">{{$psikotropika->dampak}}</textarea>
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
                   name="keterangan" id="basic-2" rows="3">{{$psikotropika->keterangan}}</textarea>
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
              <!-- <img value="{{$psikotropika->gambar}}" width="100" height="100" alt=""> -->
              <input name="gambar" type="file" class="form-control {{$errors->has('gambar')?'is-invalid':''}}"
              value="{{$psikotropika->gambar}}" >
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
                    <<a type="button" onclick="return confirm('Apakah anda yakin untuk membatalkannya?')" href="{{route("ps.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
